<?php
     $api_url = "https://opentdb.com/api.php?amount=1&type=multiple";
     $response = file_get_contents($api_url);
     $data = json_decode($response, true);

     $questionData = $data["results"][0];
     $question = html_entity_decode($questionData["question"]);
     $correct = html_entity_decode($questionData["correct_answer"]);
     $incorrect = array_map("html_entity_decode", $questionData["incorrect_answers"]);

     $options = $incorrect;
     $options[] = $correct;
     shuffle($options);
