<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="logotop.jpg">
    <title>Dynamic Teacher Voice Assistant</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<style>
    body {
    background-image: url('logotop.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.main-card {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border: none;
}

.card-header {
    background: linear-gradient(45deg, #2193b0, #6dd5ed);
    color: white;
    padding: 20px;
}

.control-panel, .content-panel {
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.form-label {
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 8px;
}

.form-select, .form-control {
    border: 2px solid #e3e3e3;
    border-radius: 10px;
    padding: 12px;
    transition: all 0.3s ease;
}

.form-select:focus, .form-control:focus {
    border-color: #2193b0;
    box-shadow: 0 0 0 0.2rem rgba(33, 147, 176, 0.25);
}

.btn {
    padding: 12px 30px;
    border-radius: 10px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}

.btn-primary {
    background: linear-gradient(45deg, #2193b0, #6dd5ed);
    border: none;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(33, 147, 176, 0.3);
}

.emotion-indicators {
    padding: 15px;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    margin-bottom: 20px;
}

.badge {
    padding: 8px 15px;
    font-size: 14px;
}

@keyframes toneChange {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.badge {
    animation: toneChange 0.5s ease-in-out;
}

.form-range::-webkit-slider-thumb {
    background: #2193b0;
}

.form-range::-moz-range-thumb {
    background: #2193b0;
}

textarea {
    font-size: 16px;
    line-height: 1.6;
    resize: none;
}

.control-buttons {
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 15px;
    margin-top: 20px;
}

/* Animations */
.btn:active {
    transform: scale(0.98);
}

.form-select:hover, .form-control:hover {
    border-color: #2193b0;
}
/* Add these styles */
.recording-section {
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 15px;
}

.recording-item {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

audio {
    height: 40px;
    border-radius: 20px;
    background: #e9ecef;
}

audio::-webkit-media-controls-panel {
    background: #e9ecef;
}

.btn-success {
    background: linear-gradient(45deg, #28a745, #34ce57);
    border: none;
    transition: all 0.3s ease;
}

.btn-success:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
}
/* Add these new styles */
.recording-item {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.recording-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.fade-out {
    opacity: 0;
    transform: translateX(20px);
    transition: all 0.3s ease;
}

.btn-group .btn {
    padding: 8px 12px;
    margin: 0 2px;
}

audio {
    height: 40px;
    border-radius: 20px;
    background: #f8f9fa;
}

.badge {
    font-size: 0.9em;
    padding: 8px 12px;
}

/* Add these responsive styles */
@media (max-width: 768px) {
    .col-md-4, .col-md-8 {
        margin-bottom: 20px;
    }

    .control-panel, .content-panel {
        padding: 15px;
    }

    .btn {
        padding: 8px 16px;
        font-size: 14px;
    }

    .control-buttons .btn {
        margin: 5px;
    }

    textarea {
        height: 150px;
    }
}

/* Modal styles */
.modal-content {
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.modal-header {
    background: linear-gradient(45deg, #2193b0, #6dd5ed);
    color: white;
    border-radius: 15px 15px 0 0;
}

.modal-body {
    padding: 20px;
}

.audio-preview audio {
    width: 100%;
    margin-bottom: 15px;
}

.download-options input,
.download-options select {
    margin-bottom: 15px;
}

/* Your existing styles here */
.recording-item {
    background: #f8f9fa;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}

.recording-item audio {
    max-width: 200px;
}

.download-btn {
    background: #28a745;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
}

.download-btn:hover {
    background: #218838;
}

</style>
</head>
<body>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card main-card">
                    <div class="card-header">
                        <h2><i class="fas fa-chalkboard-teacher me-2"></i>Dynamic Teacher Voice</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="control-panel">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="fas fa-microphone me-2"></i>Voice Selection:</label>
                                        <select id="voiceSelect" class="form-select"></select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label"><i class="fas fa-book me-2"></i>Subject:</label>
                                        <select id="topicSelect" class="form-select">
                                            <option value="general">General</option>
                                            <option value="science">Science</option>
                                            <option value="history">History</option>
                                            <option value="literature">Literature</option>
                                            <option value="mathematics">Mathematics</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label"><i class="fas fa-theater-masks me-2"></i>Teaching Style:</label>
                                        <select id="emotionSelect" class="form-select">
                                            <option value="neutral">Professional</option>
                                            <option value="excited">Enthusiastic</option>
                                            <option value="serious">Formal</option>
                                            <option value="friendly">Engaging</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label"><i class="fas fa-tachometer-alt me-2"></i>Base Speed:</label>
                                        <span id="rateValue" class="badge bg-primary float-end">1.0</span>
                                        <input type="range" class="form-range" id="rate" min="0" max="10" value="1" step="0.1">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label"><i class="fas fa-wave-square me-2"></i>Base Pitch:</label>
                                        <span id="pitchValue" class="badge bg-primary float-end">1.0</span>
                                        <input type="range" class="form-range" id="pitch" min="0" max="10" value="1" step="0.1">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-8">
                                <div class="content-panel">
                                    <div class="emotion-indicators mb-3">
                                        <span class="badge bg-info me-2" id="currentEmotion">Current Style: Professional</span>
                                        <span class="badge bg-success" id="topicIndicator">Subject: General</span>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label"><i class="fas fa-edit me-2"></i>Lesson Content:</label>
                                        <textarea id="textInput" class="form-control" rows="10" 
                                            placeholder="Enter your lesson content here...&#10;Use punctuation marks for natural expression:&#10;- Question marks (?) for inquiries&#10;- Exclamation marks (!) for emphasis&#10;- Periods (.) for normal statements"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="control-buttons text-center mt-4">
                            <button id="speakButton" class="btn btn-primary btn-lg">
                                <i class="fas fa-play me-2"></i>Start Teaching
                            </button>
                            <button id="pauseButton" class="btn btn-warning btn-lg mx-3">
                                <i class="fas fa-pause me-2"></i>Pause
                            </button>
                            <button id="stopButton" class="btn btn-danger btn-lg">
                                <i class="fas fa-stop me-2"></i>Stop
                            </button>
                           
                        <!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#recordingsModal">
    <i class="fas fa-list me-2"></i>View Recorded Lessons
</button>

<!-- Modal -->
<div class="modal fade" id="recordingsModal" tabindex="-1" aria-labelledby="recordingsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recordingsModalLabel">
                    <i class="fas fa-list me-2"></i>Recorded Lessons
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="recordings-container">
                    <div id="recordingsList" class="recordings-list">
                        <!-- Recordings will appear here automatically -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

                                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
   
</body>
</html>
