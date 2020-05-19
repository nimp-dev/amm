<?php

/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
$this->title = 'My Yii Application';
?>
<!-- <div class="site-index">

    <div class="jumbotron font-italic">
        <h1>Производство мягкой мебели на заказ</h1>
        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

  -->

<?php
$carousel = [
 [
 'content' => '<img src="26.png"/>',
 'caption' => '<h1>Заголовок</h1><p>Какой-то дополнительный текст</p><p><a href="/article/link/1" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
 'options' => []
 ],
 [
 'content' => '<img src="26.png"/>',
 'caption' => '',
 'options' => []
 ],
 [
 'content' => '<img src="26.png"/>',
 'caption' => '',
 'options' => [],
 ]
];

echo Carousel::widget([
 'items' => $carousel,
 'options' => ['class' => 'carousel slide', 'data-interval' => '5500'],
 'controls' => [
 '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" width="100%" height="50"></span>',
 '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" width="100%" height="50"></span>'
 ]
]);
?>




    <div class="body-content">
<div class="album py-5 bg-light">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="1.jpg" alt="альтернативный текст" width="100%" height="225">
                   
                    <div class="card-body">
              <p class="card-text">Какая-то очень пиздатая кровать с матрасом....дальше описание</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">1523$</button>
                  <button type="button" class="btn btn-sm   btn-outline-secondary ">купить</button>
                     </div>
                     <small class="text-muted">9 mins</small>
                     </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-4">

                <div class="card mb-4 shadow-sm">
                   <img src="2.jpg" alt="альтернативный текст" width="100%" height="225">
                    <div class="card-body">
              <p class="card-text">Ченрый, кожаный, сутенёрский диван! больше нечего добавить</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">1523$</button>
                  <button type="button" class="btn btn-sm   btn-outline-secondary ">купить</button>
                     </div>
                     <small class="text-muted">9 mins</small>
                     </div>
                    </div>
                </div>

                                <div class="card mb-4 shadow-sm">
                   <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                    <title>Placeholder</title>
                    <rect fill="#55595c" width="100%" height="100%"></rect><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
                    <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">1523$</button>
                  <button type="button" class="btn btn-sm   btn-outline-secondary ">купить</button>
                     </div>
                     <small class="text-muted">9 mins</small>
                     </div>
                    </div>
                </div> 

            </div> 
            <div class="col-md-4">
                
                <div class="card mb-4 shadow-sm">
                   <img src="3.jpg" alt="альтернативный текст" width="100%" height="225">
                    <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">1523$</button>
                  <button type="button" class="btn btn-sm   btn-outline-secondary ">купить</button>
                     </div>
                     <small class="text-muted">9 mins</small>
                     </div>
                    </div>
                </div>

            </div> 
            <div class="col-md-4"></div> 
            <div class="col-md-4"></div> 
            <div class="col-md-4"></div> 
            <div class="col-md-4"></div> 
            <div class="col-md-4"></div> 
            <div class="col-md-4"></div> 
        </div>

    </div>
</div>    
</div>
