    var questionNo = 0;
    var answers = [];
    
    $(function() 
    {
        $( "#careyQuizButton" )
        .button()
        .click(takeQuiz);
    });
    
    
    function takeQuiz()
    {
        if( questionNo != 0 )
        {
            answers.push( $("#question").val() );
        }
            
        questionNo = questionNo + 1;
        
        if( questionNo <= 10 )
        {                            
            $("#careyQuizContent").html("Loading...");        
            $.get("people/careyQuiz.php", 
                  { question : questionNo },
                   function(data) {
                    $("#careyQuizContent").html(function() {
                        var questionSet = $.parseJSON(data);
                        var questionHtml = "<p>Question " + questionNo + "/10.<br>" + questionSet.question
                            + "</p>" + 
                            "<div>" +
                                "<fieldset>" +
                                    "<select name=\"question\" id=\"question\">";

                                    for( var i = 0; i < 4; i++ )
                                        questionHtml += "<option value=\"" + (i+1) + "\">" + questionSet.options[i] + "</option>";

                                    questionHtml = questionHtml +
                                    "</select>" +
                                "</fieldset>"  +
                            "</div>";
                        return questionHtml;
                    });
                    $("#careyQuizButton").html("Next Question!");
                    if( questionNo == 10 )
                        $("#careyQuizButton").html("Submit Quiz!");
                });    
        }    
        else
        {
            $("#careyQuizContent").html("Loading..."); 
            $.post("people/careyQuizGrade.php", 
                  $.extend({}, answers), //Convert from array to JS object.
                  function(data){
                    $("#careyQuizContent").html(data);
                });
            
            $("#careyQuizButton").html("Take the Quiz Again!");
            questionNo = 0;
            answers = [];
        }
        
    }