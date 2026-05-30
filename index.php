<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeakSmart - Voice-Based Language Learning</title>
    <script>
        if (window.location.pathname.endsWith('index.php') || window.location.pathname === '/' || window.location.pathname === '/speaksmart2/') {
            window.location.href = 'index_firebase.php';
        }
    </script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('ServiceWorker registration successful');
                    })
                    .catch(err => {
                        console.log('ServiceWorker registration failed: ', err);
                    });
            });
        }
    </script>
    

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <i class="fas fa-microphone me-2"></i>SpeakSmart
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#practice">Practice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#progress">Progress</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="loginBtn">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="registerBtn">Register</a>
                    </li>
                    <li class="nav-item d-none" id="userMenu">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle me-1"></i><span id="username">User</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#profile">Profile</a></li>
                                <li><a class="dropdown-item" href="#settings">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#" id="logoutBtn">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1 class="display-4 fw-bold text-white mb-4">
                                SpeakSmart: Learn Languages with Your Voice
                            </h1>
                            <p class="lead text-white mb-4">
                                AI-powered pronunciation learning system that helps you improve speaking skills through voice interaction. 
                                Practice pronunciation, grammar, and conversation with intelligent feedback.
                            </p>
                            <div class="d-flex gap-3 flex-wrap">
                                <button class="btn btn-light btn-lg" id="startBtn">
                                    <i class="fas fa-play me-2"></i>Start Learning
                                </button>
                                <button class="btn btn-outline-light btn-lg" id="demoBtn">
                                    <i class="fas fa-headphones me-2"></i>Try Demo
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image text-center">
                            <i class="fas fa-microphone-alt text-white" style="font-size: 200px; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold">Features</h2>
                    <p class="lead text-muted">Powerful features to accelerate your language learning</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 feature-card">
                            <div class="card-body text-center">
                                <div class="feature-icon mb-3">
                                    <i class="fas fa-microphone fa-3x text-primary"></i>
                                </div>
                                <h5 class="card-title">Voice-Based Learning</h5>
                                <p class="card-text">Practice speaking naturally instead of typing. Our AI listens and analyzes your pronunciation in real-time.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 feature-card">
                            <div class="card-body text-center">
                                <div class="feature-icon mb-3">
                                    <i class="fas fa-chart-line fa-3x text-success"></i>
                                </div>
                                <h5 class="card-title">Pronunciation Scoring</h5>
                                <p class="card-text">Get instant feedback on your pronunciation with detailed scoring and improvement suggestions.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 feature-card">
                            <div class="card-body text-center">
                                <div class="feature-icon mb-3">
                                    <i class="fas fa-language fa-3x text-info"></i>
                                </div>
                                <h5 class="card-title">Multiple Accents</h5>
                                <p class="card-text">Choose from American, British, or Neutral English accents to match your learning goals.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 feature-card">
                            <div class="card-body text-center">
                                <div class="feature-icon mb-3">
                                    <i class="fas fa-comments fa-3x text-warning"></i>
                                </div>
                                <h5 class="card-title">Conversation Practice</h5>
                                <p class="card-text">Engage in natural conversations with AI to practice real-world speaking scenarios.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 feature-card">
                            <div class="card-body text-center">
                                <div class="feature-icon mb-3">
                                    <i class="fas fa-book fa-3x text-danger"></i>
                                </div>
                                <h5 class="card-title">Grammar Awareness</h5>
                                <p class="card-text">Improve your grammar skills with interactive exercises and instant corrections.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 feature-card">
                            <div class="card-body text-center">
                                <div class="feature-icon mb-3">
                                    <i class="fas fa-chart-bar fa-3x text-secondary"></i>
                                </div>
                                <h5 class="card-title">Progress Tracking</h5>
                                <p class="card-text">Monitor your improvement over time with detailed progress reports and statistics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Practice Section -->
        <section id="practice" class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold">Practice Modes</h2>
                    <p class="lead text-muted">Choose how you want to practice today</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="card practice-card h-100">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0"><i class="fas fa-font me-2"></i>Word & Sentence Practice</h5>
                            </div>
                            <div class="card-body">
                                <p>Practice pronunciation of individual words or complete sentences with syllable breakdowns.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Syllable pronunciation guide</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Real-time feedback</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Difficulty levels</li>
                                </ul>
                                <button class="btn btn-primary w-100" onclick="startPractice('word')">
                                    Start Word Practice
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="card practice-card h-100">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0"><i class="fas fa-book-open me-2"></i>Grammar Awareness</h5>
                            </div>
                            <div class="card-body">
                                <p>Improve your grammar by identifying correct sentences and learning grammar rules.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Interactive exercises</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Rule explanations</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Progressive difficulty</li>
                                </ul>
                                <button class="btn btn-success w-100" onclick="startPractice('grammar')">
                                    Start Grammar Practice
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="card practice-card h-100">
                            <div class="card-header bg-info text-white">
                                <h5 class="mb-0"><i class="fas fa-comments me-2"></i>Conversation Mode</h5>
                            </div>
                            <div class="card-body">
                                <p>Practice natural conversation with AI in various real-world scenarios.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Real-world scenarios</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Contextual feedback</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Multiple topics</li>
                                </ul>
                                <button class="btn btn-info w-100" onclick="startPractice('conversation')">
                                    Start Conversation
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Progress Section -->
        <section id="progress" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold">Your Progress</h2>
                    <p class="lead text-muted">Track your learning journey</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Learning Statistics</h5>
                            </div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-md-3">
                                        <div class="stat-item">
                                            <h3 class="text-primary" id="totalWords">0</h3>
                                            <p class="text-muted">Words Practiced</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="stat-item">
                                            <h3 class="text-success" id="avgScore">0%</h3>
                                            <p class="text-muted">Average Score</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="stat-item">
                                            <h3 class="text-info" id="streakDays">0</h3>
                                            <p class="text-muted">Day Streak</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="stat-item">
                                            <h3 class="text-warning" id="practiceTime">0</h3>
                                            <p class="text-muted">Minutes Practiced</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr>
                                
                                <div class="progress-section">
                                    <h6>Recent Activity</h6>
                                    <div id="recentActivity" class="activity-list">
                                        <p class="text-muted">No recent activity. Start practicing to see your progress!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>SpeakSmart</h5>
                    <p>Voice-based language learning system powered by AI</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; 2026 SpeakSmart. Group 6: Allen, Christine, Julius</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="loginUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="loginUsername" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="registerForm">
                        <div class="mb-3">
                            <label for="registerUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="registerUsername" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="registerEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerFullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="registerFullName" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="registerPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Voice Command Assistant -->
    <div class="voice-assistant" id="voiceAssistant">
        <button class="voice-assistant-btn" id="voiceAssistantBtn" onclick="toggleVoiceAssistant()">
            <i class="fas fa-microphone-alt"></i>
        </button>
        <div class="voice-assistant-panel" id="voiceAssistantPanel">
            <div class="voice-assistant-header">
                <h6><i class="fas fa-robot me-2"></i>SpeakSmart Assistant</h6>
                <button class="btn-close" onclick="toggleVoiceAssistant()"></button>
            </div>
            <div class="voice-assistant-body">
                <div id="voiceAssistantMessages"></div>
                <div class="voice-assistant-input">
                    <button class="btn btn-primary" id="voiceCommandBtn" onclick="startVoiceCommand()">
                        <i class="fas fa-microphone"></i> Tap to Speak
                    </button>
                    <small class="text-muted d-block mt-2">Say "Hey SpeakSmart" to wake me up!</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Practice Modal -->
    <div class="modal fade" id="practiceModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="practiceTitle">Practice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div id="practiceContent">
                        <!-- Dynamic practice content will be loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Settings Modal -->
    <div class="modal fade" id="settingsModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="settingsForm">
                        <div class="mb-3">
                            <label for="preferredAccent" class="form-label">Preferred Accent</label>
                            <select class="form-select" id="preferredAccent">
                                <option value="american">American English</option>
                                <option value="british">British English</option>
                                <option value="australian">Australian English</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="preferredDifficulty" class="form-label">Difficulty Level</label>
                            <select class="form-select" id="preferredDifficulty">
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="hard">Hard</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="voiceCommandsEnabled" checked>
                                <label class="form-check-label" for="voiceCommandsEnabled">
                                    Enable Voice Commands
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offlineModeEnabled">
                                <label class="form-check-label" for="offlineModeEnabled">
                                    Enable Offline Mode
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/app_fixed.js"></script>
</body>
</html>
