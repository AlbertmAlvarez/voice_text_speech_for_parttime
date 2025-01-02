let synth = window.speechSynthesis;
let voices = [];
let mediaRecorder;
let audioChunks = [];

// Enhanced audio recording setup
async function setupRecording() {
    const audioContext = new (window.AudioContext || window.webkitAudioContext)();
    const destination = audioContext.createMediaStreamDestination();
    const gainNode = audioContext.createGain();
    
    // Improve audio quality settings
    gainNode.gain.value = 1.5; // Enhanced volume
    gainNode.connect(destination);
    
    mediaRecorder = new MediaRecorder(destination.stream, {
        mimeType: 'audio/webm;codecs=opus',
        audioBitsPerSecond: 128000 // Higher bitrate for better quality
    });
    
    return destination;
}

async function speak() {
    const destination = await setupRecording();
    const text = document.getElementById('textInput').value;
    const utterance = new SpeechSynthesisUtterance(text);
    
    // Enhanced voice settings
    utterance.voice = voices[document.getElementById('voiceSelect').value];
    utterance.rate = parseFloat(document.getElementById('rate').value);
    utterance.pitch = parseFloat(document.getElementById('pitch').value);
    utterance.volume = 5.0; 
    
    audioChunks = [];
    
    mediaRecorder.ondataavailable = (event) => {
        audioChunks.push(event.data);
    };

    mediaRecorder.onstop = () => {
        const audioBlob = new Blob(audioChunks, {
            type: 'audio/webm'
        });
        const audioUrl = URL.createObjectURL(audioBlob);
        addEnhancedRecording(audioUrl);
    };

    mediaRecorder.start();
    synth.speak(utterance);
}

function addEnhancedRecording(audioUrl) {
    const recordingsList = document.getElementById('recordingsList');
    const recordingItem = document.createElement('div');
    recordingItem.className = 'recording-item mb-3 p-3 border rounded shadow-sm';
    
    const timestamp = new Date().toLocaleString();
    const voiceUsed = document.getElementById('voiceSelect').options[document.getElementById('voiceSelect').selectedIndex].text;
    
    recordingItem.innerHTML = `
        <div class="d-flex flex-column">
            <div class="d-flex align-items-center mb-2">
                <span class="badge bg-primary me-2">Recording ${timestamp}</span>
                <span class="badge bg-info">Voice: ${voiceUsed}</span>
            </div>
            <audio controls src="${audioUrl}" class="w-100 mb-2"></audio>
            <div class="btn-group">
                <a href="${audioUrl}" download="Enhanced_Recording_${timestamp}.webm" 
                   class="btn btn-success btn-sm">
                    <i class="fas fa-download me-1"></i> Download
                </a>
                <button class="btn btn-danger btn-sm" onclick="this.closest('.recording-item').remove()">
                    <i class="fas fa-trash me-1"></i> Delete
                </button>
            </div>
        </div>
    `;
    
    recordingsList.insertBefore(recordingItem, recordingsList.firstChild);
}
