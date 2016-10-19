 <?php
<html>

	<head>
3
	<title>DIC - Online Quiz Example Using PHP</title>
4
	</head>
5
	 
6
	<body>
7
	 
8
	 
9
	<?php
10
	 
11
	     
12
	// Read answerkey.txt file for the answers to each of the questions.
13
	function readAnswerKey($filename) {
14
	    $answerKey = array();
15
	     
16
	    // If the answer key exists and is readable, read it into an array.
17
	    if (file_exists($filename) && is_readable($filename)) {
18
	        $answerKey = file($filename);
19
	    }
20
	     
21
	    return $answerKey;
22
	}
23
	 
24
	 
25
	// Read the questions file and return an array of arrays (questions and choices)
26
	// Each element of $displayQuestions is an array where first element is the question 
27
	// and second element is the choices.
28
	 
29
	function readQuestions($filename) {
30
	    $displayQuestions = array();
31
	     
32
	    if (file_exists($filename) && is_readable($filename)) {
33
	        $questions = file($filename);
34
	     
35
	        // Loop through each line and explode it into question and choices
36
	        foreach ($questions as $key => $value) {
37
	            $displayQuestions[] = explode(":",$value);
38
	        }               
39
	    }
40
	    else { echo "Error finding or reading questions file."; }
41
	     
42
	    return $displayQuestions;
43
	}
44
	 
45
	 
46
	// Take our array of exploded questions and choices, show the question and loop through the choices.
47
	function displayTheQuestions($questions) {
48
	    if (count($questions) > 0) {
49
	        foreach ($questions as $key => $value) {
50
	            echo "<b>$value[0]</b><br/><br/>";
51
	             
52
	            // Break the choices appart into a choice array
53
	            $choices = explode(",",$value[1]);
54
	             
55
	            // For each choice, create a radio button as part of that questions radio button group
56
	            // Each radio will be the same group name (in this case the question number) and have
57
	            // a value that is the first letter of the choice.
58
	             
59
	            foreach($choices as $value) {
60
	                $letter = substr(trim($value),0,1);
61
	                echo "<input type=\"radio\" name=\"$key\" value=\"$letter\">$value<br/>";
62
	            }
63
	             
64
	            echo "<br/>";
65
	        }
66
	    }
67
	    else { echo "No questions to display."; }
68
	}
69
	 
70
	 
71
	// Translates a precentage grade into a letter grade based on our customized scale.
72
	function translateToGrade($percentage) {
73
	 
74
	    if ($percentage >= 90.0) { return "A"; }
75
	    else if ($percentage >= 80.0) { return "B"; }
76
	    else if ($percentage >= 70.0) { return "C"; }
77
	    else if ($percentage >= 60.0) { return "D"; }
78
	    else { return "F"; }
79
	}
80
	 
81
	?>
82
	 
83
	<h2>Welcome to the Dream In Code Example Online Quiz!</h2>
84
	<h4>Please complete the following questions as accurately as possible.</h4>
85
	 
86
	<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
87
	 
88
	<?php
89
	    // Load the questions from the questions file
90
	    $loadedQuestions = readQuestions("questions.txt");
91
	     
92
	    // Display the questions
93
	    displayTheQuestions($loadedQuestions);
94
	?>
95
	 
96
	<input type="submit" name="submitquiz" value="Submit Quiz"/>
97
	 
98
	 
99
	<?php
100
	 
101
	// This grades the quiz once they have clicked the submit button
102
	if (isset($_POST['submitquiz'])) {
103
	 
104
	    // Read in the answers from the answer key and get the count of all answers.
105
	    $answerKey = readAnswerKey("answerkey.txt");
106
	    $answerCount = count($answerKey);
107
	    $correctCount = 0;
108
	 
109
	 
110
	    // For each answer in the answer key, see if the user has a matching question submitted
111
	    foreach ($answerKey as $key => $keyanswer) {
112
	        if (isset($_POST[$key])) {
113
	            // If the answerkey and the user submitted answer are the same, increment the 
114
	            // correct answer counter for the user
115
	            if (strtoupper(rtrim($keyanswer)) == strtoupper($_POST[$key])) {
116
	                $correctCount++;
117
	            }
118
	        }
119
	    }
120
	 
121
	 
122
	    // Now we know the total number of questions and the number they got right. So lets spit out the totals.
123
	    echo "<br/><br/>Total Questions: $answerCount<br/>";
124
	    echo "Number Correct: $correctCount<br/><br/>";
125
	 
126
	    if ($answerCount > 0) {
127
	 
128
	        // If we had answers in the answer key, translate their score to percentage
129
	        // then pass that percentage to our translateGrade function to return a letter grade.
130
	        $percentage = round((($correctCount / $answerCount) * 100),1);
131
	        echo "Total Score: $percentage% (Grade: " . translateToGrade($percentage) . ")<br/>";
132
	    }
133
	    else {
134
	        // If something went wrong or they failed to answer any questions, we have a score of 0 and an "F"
135
	        echo "Total Score: 0 (Grade: F)";
136
	    }
137
	}
138
	 
139
	?>
140
	 
141
	</form>
142
	 
143
	</body>
144
	</html>