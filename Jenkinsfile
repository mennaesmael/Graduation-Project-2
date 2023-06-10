pipeline {
    agent any
    environment {
        PATH = "D:\\all programms\\xampp\\php;${env.PATH}"
        DB_CONNECTION = 'mysql'
        DB_HOST = '127.0.0.1'
        DB_PORT = '3306'
        DB_DATABASE = 'governorate_test'
        DB_USERNAME = 'omarr'
        DB_PASSWORD = '123'
        APP_KEY = 'base64:ikWs9zd2xPhKmdnhHu2ZczItUTKwLp8efOSFEFm/4uw='
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
