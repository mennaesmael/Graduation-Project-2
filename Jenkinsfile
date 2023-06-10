pipeline {
    agent any

    stages {
        stage('Install dependencies') {
            steps {
                sh 'composer install'
            }
        }

        stage('Run tests') {
            steps {
                sh './vendor/bin/phpunit'
            }
        }
    }
}
