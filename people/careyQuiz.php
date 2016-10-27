<?php

    $questions = [ 
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
    ];
    


    $questionNo = isset( $_GET["question"] ) ? $_GET["question"] : 1;

    if( $questionNo < 1 || $questionNo > 10 )
        $questionNo = 1;

    $curr = [ 
        "question" => $questions[$questionNo],
        "options" => $options[$questionNo]
    ];
    

    print json_encode($curr);

    
        
?>
