<?php

    /*$questions = [ 
        "",
        "What continent has Drew mistaken for a country?", 
        "How many points does Drew usually give out at the end of a game?",
        "Who's the tall one who should get more lines?",
        "What sound does an arctic tern make?",
        "What is the crew's <i>favorite</i> game in the whole wide world?",
        "No more Bee Gees?", 
        "Who of the following has not appeared as a guest celebrity on <strong>Whose line?</strong>",
        "What comes to mind when I say Ricky Ricardo and great cigars?",
        "An unlikely Superhero name for Colin Mochrie: ",
        "__________________________",
    ];

    $options = [
        [],
        ["Africa","The USA","Asia","Europe"],
        ["100","1000","10000","1"],
        ["Colin","Ryan","Wayne","Drew"],
        ["Ryan's Shoes","The Backstreet Boys","Who?","Who cares?"],
        ["Hoedown","The End Credits","Colin's Bald","Garfield"],
        ["Disco boy!", "Richard Simmons","We got Drew Carey","Elvis is Alive"],
        ["Stephen Colbert","Robin Williams","Bill Clinton","Richard Simmons"],
        ["Cuba","Lucy","Tapioca","Salsa"],
        ["A pregnant woman on a roller coaster","Bartender","Captain Hummingbird","Captain Hair"],
        ["What?","Ha","Meow!","I'll be back"],
    ];*/


    $grade = 0;
    $answers = array( 1, 2, 2, 2, 1, 1, 3, 3, 4, 3 );

    foreach( $answers as $index => $answer)
    {
        if( $answer == $_POST[$index] )
            $grade++;
    }

    if( $grade >= 10 )
        print "<p>You are a <strong>Whose Line</strong> Fanatic! You got a perfect 10 out of 10!</p>";
    else if ( $grade >= 7 )
        print "<p>Not bad! You scored a $grade out of 10!</p>";
    else if ( $grade >= 4 )
        print "<p>Your score is about as bald as Colin's head. You scored a $grade out of 10.</p>";
    else if( $grade >= 1 )
        print "<p>You scored a $grade out of 10, but the points don't matter.</p>";
    else
        print "<p>You love the show as much as Ryan loves Hoedowns. 0 out of 0.";
     
?>