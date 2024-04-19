<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page-03</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="container">
        <h1>One Last Thing...</h1>

        <section class="highlighted-message">
            <p><strong>Did you know after death the human brain lives on for the seven minutes to replay its best memories. Will you be my seven minutes?</strong></p>
        </section>

        <section class="questions-section">
            <form id="responseForm">
                <div class="question">
                    <p>Do you feel the same way?</p>
                    <label>
                        <input type="radio" name="feeling" value="yes">
                        Yes
                    </label>
                    <label>
                        <input type="radio" name="feeling" value="no">
                        No
                    </label>
                </div>
        
                <div class="question">
                    <p>If yes, please share your thoughts and Please dont leave it empty:</p>
                    <textarea name="thoughts" rows="4" cols="50" placeholder="Share your thoughts here..."></textarea>
                </div>
            </form>

            <button onclick="submitForm()">Submit</button>

        </section>
        
        
    </div>
    <script src="./js/script.js"></script>

</body>
</html>