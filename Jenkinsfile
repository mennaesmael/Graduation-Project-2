pipeline {
    agent any
    environment {
        PATH = "D:\\all programms\\xampp\\php;${env.PATH}"
    }
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
