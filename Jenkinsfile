pipeline {
    agent any
    environment {
        PHP_PATH = '"D:\\all programms\\xampp\\php\\php.exe"' // Update this with the correct path to your PHP executable
    }
    stages {
        stage('Install dependencies') {
            steps {
                bat "\"%PHP_PATH%\" composer.phar install"
            }
        }
        stage('Run tests') {
            steps {
                bat "\"%PHP_PATH%\" .\\vendor\\bin\\phpunit"
            }
        }
    }
}
