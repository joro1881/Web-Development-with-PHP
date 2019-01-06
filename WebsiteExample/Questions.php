<?php require_once 'contact.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Writing progress</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            position: relative;
            background-image: url("paper_texture329.png");
            font-family: "journal.ttf", Times, sans-serif;
        }
    </style>
</head>
<body>

<div class="container-fluid" style="background-color:#a17f1a;color:black;height:100px;">
    <h1 id="home">The story of the Lost Dragons</h1>
    <h4 class="col-sm-3" id="info1">Questions</h4>
    <a href="./Progress.html" class="btn btn-info" role="button">Progress</a>
    <a href="Questions.php" class="btn btn-info" role="button">Questions</a>
    <a href="./Myths.html" class="btn btn-info" role="button">Myths</a>
    <a href="https://george8yankov.wordpress.com/2015/01/20/writing-guide/" class="btn btn-info" role="button">Blog</a>
</div>
<script src="home.js"></script>
<br>

<div class="container" style="font-size:100%">

    <h4><b>How one is writing a fantasy book ? </b></h4>
    <p>
        Isn't small task to go with. Basically there are two approaches for writing books.<br>
        One is to outline the book, the Plot, what you want to tell, the other is "discovery" writing starting
        from a <br>"wonder point" like "what if". The best example in this direction is Steven King. <br>

        Off course there is a lot of stuffs we have to take under consideration. One of this is World Building.<br>
        A good story has to be realistic, when you say there аре dragons or aliens in it, that should reflect to
        everything.<br>
        From the characters you are describing, their understanding and view of the world, to the economy bounce.
        For example is the story of "<a href="http://www.imdb.com/title/tt1637688/">In time</a>"
        <br>
        There a lot of variables that have to be taken under account while writing a story, like serious writing.
    </p>

    <h4><b>Why are you choosing such a hobby ? </b></h4>
    <p> Well, life is interesting journey and each of us has his path. <br>
        The path of some people is easy, the one of others is full with obstacles<br>
        that change you forever. One cannot understand philosophy outside of him,
        but when you understand one philosophy<br> you cannot go back.
        It takes your sleep, your peace, your thoughts and questions.<br>
        You cannot simply ignore such things and the literature is the only reasonable answer of this.<br>
        The reasonable escape to rebuild before next fight/obstacle. Some people find other hobbies,<br>
        some start drinking or have bad addictions, so they can escape from reality.
        Me, i find my answers in the literature and <br>
        the philosophy. So, now is my turn to give back some answers.
    </p>

    <h4><b>Do you expect to profit from writing a book?</b></h4>
    <p>Not really, but won't send back any penny I make from it.</p>

    <h4><b>Do you expect people to read your book ? </b></h4>
    <p>No, I don't leave myself to have expectations that will stop my writing proccess.<br>
        I believe some people might like it, some won't. Nevertheless I will write it under my own criteria<br>
        Will quote Steven King here, a good book will be liked from 50% of the readers and criticise from the other 50%.
    </p>
    That's my goal.
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="page-header text-center">Contact Form Example</h1>
            <form class="form-horizontal" role="form" method="post" action="contact.php">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name"
                               value="<?php echo htmlspecialchars($_POST['name']); ?>">
                        <?php echo "<p class='text-danger'>$errName</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="example@domain.com"
                               value="<?php echo htmlspecialchars($_POST['email']); ?>">
                        <?php echo "<p class='text-danger'>$errEmail</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4"
                                  name="message"><?php echo htmlspecialchars($_POST['message']); ?></textarea>
                        <?php echo "<p class='text-danger'>$errMessage</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                        <?php echo "<p class='text-danger'>$errHuman</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <?php echo $result; ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>