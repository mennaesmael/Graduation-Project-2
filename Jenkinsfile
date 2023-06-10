pipeline {
    agent any
    stages {
        stage('Install dependencies') {
            steps {
                bat 'composer install'
            }
        }
        stage('Run tests') {
            steps {
                bat '.\\vendor\\bin\\phpunit'
            }
        }
    }
}
