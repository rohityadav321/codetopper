var questions = [
    {
        question: "which of these is not a programming language?",
        answers: {
            a: "html",
            b: "java",
            c: "c++",
            d: "javascript"
        },
        correctAnswer: 'a'
    },
    {
        question: "which of these is not a programming language?",
        answers: {
            a: "html",
            b: "java",
            c: "c++",
            d: "javascript"
        },
        correctAnswer: 'a'
    },
    {
        question: "which of these is not a programming language?",
        answers: {
            a: "html",
            b: "java",
            c: "c++",
            d: "javascript"
        },
        correctAnswer: 'a'
    },
    {
        question: "which of these is not a programming language?",
        answers: {
            a: "html",
            b: "java",
            c: "c++",
            d: "javascript"
        },
        correctAnswer: 'a'
    },
];

var quizContainer = document.getElementById('quiz');
var resultContainer = document.getElementById('result');
var submitButton = document.getElementById('submit');
function generateQuiz(questions, quizContainer, resultContainer, submitButton) {

    function showQuestions(questions, quizContainer) {
        var output = [];
        var answers;

        for (var i = 0; i < questions.length; i++) {
            answers = [];
            for (letter in questions[i].answers) {
                answers.push(
                    '<lable>'
                    + '<input type="radio" name="question' + i + '" value="' + letter + '">'
                    + letter + ':'
                    + questions[i].answers[letter]
                    + '</label>'
                );
            }
            output.push(
                '<div class="quesions">' + questions[i].question + '</div>'
                + '<div class="answers">' + answers.join('') + '</div>'
            );
        }
        quizContainer.innerHTML = output.join('');


    }
    function showResults(questions, quizContainer, resultContainer) {
        var answerContainers = quizContainer.querySelectorAll('.answers');
        var userAnswer = '';
        var numCorrect = 0;

        for (var i = 0; i < questions.length; i++) {
            userAnswer = (answerContainers[i].querySelector('input[name=question' + i + ']"checked') || {}).value;

            if (userAnswer === questions[i].correctAnswer) {
                numCorrect++;
                answerContainers[i].style.color = "lightgreen";
            }
            else {
                answerContainers[i].style.color = "red";
            }

        }
        resultContainer.innerHTML = numCorrect + 'out of' + questions.length;

    }
    showQuestions(questions, quizContainer);

    submitButton.addEventlistener('click', show);

    function show() {
        showResults(questions, quizContainer, resultContainer);
    }
}






if(this.questions.length === this.score){
    quiz.innerHTML="congratulation you answered all quesions right....!!!"
 }      
 else{
    quiz.innerHTML=" sorry you do not answered all questions right. try again"
 }