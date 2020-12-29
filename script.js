
var ul = document.getElementById('ul');
var btn = document.getElementById('button');
var pre = document.getElementById('pre');
var score = document.getElementById('score');
var quiz = document.getElementById('question');
var op1 = document.getElementById('op1');
var op2 = document.getElementById('op2');
var op3 = document.getElementById('op3');
var op4 = document.getElementById('op4');

pre.addEventListener("click",open);
function open(){
   
   ul.style.display="block";
   btn.style.display="block";
}

var app = {
   questions: [
      { q: 'HTML stands for?', options: ['  Hyper Text Markup Language', 'High Text Markup Language', 'Hyper Tabular Markup Language', 'None of these'], answer: 1 },

      { q: 'which of the following tag is used to mark a begining of paragraph ?', options: ['TD', 'br', 'P', 'tr'], answer: 3 },

      { q: 'Correct HTML tag for the largest heading is ?', options: ['h4', 'h1', 'h3', 'h6'], answer: 2 }
   ],
   index: 0,
   load: function () {
      if (this.index <= this.questions.length - 1) {
         quiz.innerHTML = this.index + 1 + ". " + this.questions[this.index].q;
         op1.innerHTML = "a"+")" + " " +this.questions[this.index].options[0];
         op2.innerHTML = "b"+")" + " " +this.questions[this.index].options[1];
         op3.innerHTML = "c"+")" + " " +this.questions[this.index].options[2];
         op4.innerHTML = "d"+")" + " " +this.questions[this.index].options[3];
         this.Score();
         pre.style.display="none";
      }
      else {

         quiz.innerHTML = "Quiz Over......!!!"

         if (this.questions.length === this.score) {
            quiz.innerHTML = "Congratulation you answered all quesions right....!!!"
            btn.style.display = "none";
            pre.style.display ="none";
         ul.style.display = "none";
         }
         else if(this.questions.length > this.score){
            quiz.innerHTML = " Oops you answered few questions wrong....!!!";
            btn.style.display="none";
         ul.style.display = "none";
         pre.style.display="block";
         pre.open();
      }
         //op1.style.display="none";
         //op2.style.display="none";
         //op3.style.display="none";
         //op4.style.display="none";

      }
   },
   next: function () {
      this.index++;
      this.load();
   },
   previous: function(){
         this.index=0
         this.score=0
         this.load();
},
   check: function (ele) {

      var id = ele.id.split('');

      if (id[id.length - 1] == this.questions[this.index].answer) {
         this.score++;
         ele.className = "correct";
         ele.innerHTML = "Correct";
         this.Score();
      }
      else {
         ele.className = "wrong";
         ele.innerHTML = "Wrong";
      }
   },
   notClickAble: function () {
      for (let i = 0; i < ul.children.length; i++) {
         ul.children[i].style.pointerEvents = "none";
      }
   },

   clickAble: function () {
      for (let i = 0; i < ul.children.length; i++) {
         ul.children[i].style.pointerEvents = "auto";
         ul.children[i].className = ''

      }
   },
   score: 0,
   Score: function () {
      score.innerHTML = this.score + "/" + this.questions.length;
   }

}


window.onload = app.load();

function button(ele) {
   app.check(ele);
   app.notClickAble();
}

function next() {
   app.next();
   app.clickAble();
}
function previous() {
   app.previous();
   app.clickAble();
}



