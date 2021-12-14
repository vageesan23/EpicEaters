<?php include '../parts/head.php' ?>
<!-- This is store page-->

<style>
    @media (min-width: 811px) {
        .landscape-view {
            height: 270px !important;
        }
    }

    .ui-content {
        margin-bottom: 30px !important;
    }
</style>

<div data-role="page" id="about">
    <center>
        <img class="landscape-view" src="../../common/assets/images/about-us.png" height="200px" width="100%">
    </center>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">
        <div class="header-title" style="margin-bottom: 68px;">
            <h3>Epic Eaters</h3>

        </div>
        <hr style="border: 2px solid #DADADA; margin-bottom:30px">
        <p style="font-size: 14px; font-family: 'Montserrat', sans-serif; text-align: justify">
            iCraft is the leading independent home improvement and home repair website. It has been repeatedly honored
            among the Best on the Web, and was named "One of the Top 50 Sites in the World" by Time Magazine. In
            addition to our broad list of topics, we operate the most active home improvement forum on the internet,
            enabling consumers to get personalized advice from professionals in over 100 subjects.
            <br><br>
            iCraft was established in 1995 with the goal of providing consumers with unbiased home improvement and
            repair information in a community environment. Today DoItYourself averages over ten million unique visitors
            per month. With comprehensive how-to content, engaging features and interviews, and expertly moderated
            community forums, DoItYourself makes it easy and fun to tackle even the most complex home improvement
            projects.
            <br><br>
            Would you like to share a project you DIYed? Check out our Projects section.
        </p>

    </div>
    <?php include '../parts/chatbot.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
</body>

</html>