var currentQuestion = 1;
    var submitButton = document.getElementById("submit");
    var prevButton = document.getElementById("Prev");
    var nextButton = document.getElementById("Next");

    document.getElementById("quizzContent").classList.add("d-none");
    document.getElementById("btnStart").addEventListener("click", startQuizz); 

    function startQuizz() {
        document.getElementById("startQuizz").classList.add("d-none");
        document.getElementById("quizzContent").classList.remove("d-none");   
    }

    // init by 1rst question
    showQuestion(currentQuestion);
    
    submitButton.style.display = "none";

    //bouton previous & next
    prevButton.addEventListener("click", prevQuest);
    nextButton.addEventListener("click", nextQuest);

    function prevQuest() 
    {
        if (currentQuestion > 1)
        {
            hideQuestion(currentQuestion)
            currentQuestion--;
            showQuestion(currentQuestion);
            paginate(currentQuestion);
        }
    }

   function nextQuest() {
        if (currentQuestion < 10)
        {
            hideQuestion(currentQuestion)
            currentQuestion++;
            showQuestion(currentQuestion);
            paginate(currentQuestion);
        }
    } 

    function hideQuestion(currentQuestion) {
        var questionClass = ".question" + currentQuestion;
        var hts = document.querySelector(questionClass);
        hts.classList.add("d-none");
    }

    function showQuestion(currentQuestion) {
        var questionClass = ".question" + currentQuestion;
        var hts = document.querySelector(questionClass);
        hts.classList.remove("d-none");
    }

    function paginate(currentQuestion)
    {
        if (currentQuestion == 1)
        {
            prevButton.parentElement.classList.add("disabled");
        }
        else
        {
            prevButton.parentElement.classList.remove("disabled");
        }

        if (currentQuestion == 10)
        {
            nextButton.parentElement.classList.add("disabled");
            submitButton.style.display = "block";
        }
        else
        {
            nextButton.parentElement.classList.remove("disabled");
            if (submitButton.style.display === "block") {
                submitButton.style.display = "none";
            }
            
        }
    }