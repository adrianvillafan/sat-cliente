<style>
    body {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    }

    .container {
    margin: 60px auto;
    width: 100%;
    padding : 0;
    }
    .container .widget span {
    color: #aaa;
    font-size: 12px;
    }
    .container .widget button {
    /* padding: 5px 10px; */
    font-size: 16px;
    white-space: nowrap;
    vertical-align: middle;
    display: inline-block;
    /*background: none;*/
    border: none;
    box-shadow: none;
    cursor: pointer;
    text-align: center;
    font-weight: 500;
    border-radius: 100%;
    margin: 0;
    outline: none;
    margin-left: -1px;
    width: 40px;
    height: 40px;
    border: 3px solid #eee;
    transform: scale(1);
    transition: background 0.2s ease-in, color 0.2s ease-in, border-color 0.2s ease-in, transform 0.2s cubic-bezier(0.5, 2, 0.5, 0.75);
    }
    .container .widget button.detractor-hover {
    background: #f44336;
    color: white;
    border-color: #f55a4e;
    transform: scale(1.05);
    }
    .container .widget button.passive-hover {
    background: #f57c00;
    color: white;
    border-color: #ff8910;
    transform: scale(1.05);
    }
    .container .widget button.promoter-hover {
    background: #4caf50;
    color: white;
    border-color: #5cb860;
    transform: scale(1.05);
    }
    .container .widget.widget-sm {
    width: 315px;
    background: #eee;
    border: 2px solid #ccc;
    padding: 15px;
    box-sizing: border-box;
    position: relative;
    padding-bottom: 30px;
    }
    .container .widget.widget-sm .positive-text,
    .container .widget.widget-sm .negative-text {
    position: absolute;
    }
    .container .widget.widget-sm .positive-text {
    right: 20px;
    bottom: 10px;
    text-align: right;
    }
    .container .widget.widget-sm .negative-text {
    left: 20px;
    bottom: 10px;
    text-align: left;
    }
    .container .widget.widget-sm button {
    border: none;
    margin-left: -3px;
    width: 27px;
    height: 27px;
    font-size: 12px;
    font-weight: normal;
    transform: scale(1) !important;
    /* background-color: #ccc; */
    border-radius: none;
    text-align: center;
    display: inline-block;
    }
</style>

<div class="container">
   
   <div class="widget">
      <input type="number" id="real" name="score" value="" hidden="hidden" >
      <button class="detractor" type="button" onclick="rating(1)" name="regla"  form="regForm" value="1" >1</button>
      <button class="detractor" type="button" onclick="rating(2)" name="regla"  form="regForm" value="2">2</button>
      <button class="detractor" type="button" onclick="rating(3)" name="regla"  form="regForm" value="3">3</button>
      <button class="detractor" type="button" onclick="rating(4)" name="regla"  form="regForm" value="4">4</button>
      <button class="detractor" type="button" onclick="rating(5)" name="regla"  form="regForm" value="5">5</button>
      <button class="passive" type="button" onclick="rating(6)" name="regla"  form="regForm" value="6">6</button>
      <button class="passive" type="button" onclick="rating(7)" name="regla"  form="regForm" value="7">7</button>
      <button class="passive" type="button" onclick="rating(8)" name="regla"  form="regForm" value="8">8</button>
      <button class="promoter" type="button" onclick="rating(9)" name="regla"  form="regForm" value="9">9</button>
      <button class="promoter" type="button" onclick="rating(10)" name="regla"  form="regForm" value="10">10</button>
   </div>
   
</div>

<script>
function rating(a){
   document.getElementById("real").value = a;
   nextPrev(1)

}

</script>

<script>
$('button').hover(function(){
   var $this = $(this);
   var $prevAll = $(this).prevAll();
   
   var className = $this.attr("class") + "-hover";
   
   $this.addClass(className);
   $prevAll.addClass(className);
}, function() {
   var $this = $(this);
   var $prevAll = $(this).prevAll();
   
   $this.removeClass("detractor-hover passive-hover promoter-hover");
   $prevAll.removeClass("detractor-hover passive-hover promoter-hover");
});

</script>