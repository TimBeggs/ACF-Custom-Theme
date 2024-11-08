<?php
global $page_content;
$heading = $page_content['heading'];
$questions_and_answers = $page_content['questions_and_answers'];
?>
<section class="faq">
    <?php if(!empty($heading)) : ?><h3><?php echo $heading; ?></h3><?php endif; ?>
    <?php if(is_array($questions_and_answers) == 1) : ?>
      <div class="container-main container questions_and_answers">
          <?php foreach ($questions_and_answers as $key => $questions_and_answer) {
              $question = $questions_and_answer['question'];
              $answer = $questions_and_answer['answer'];?>
              <p class = "question"><?php echo $question; ?></p>
              <p class = "answer"><?php echo $answer; ?></p>
          <?php
          }
          ?>
      </div>
    <?php endif; ?>
</section>
<script>
var acc = document.getElementsByClassName("question");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    panel.classList.toggle("show");
  });
}
</script>
