<?php include 'above.php';
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
        font-family: Verdana, sans-serif;
        margin: 0;
      }

    * {
        box-sizing: border-box;
      }

.row > .column {
                  padding: 8px;
                }

.row:after {
            content: "";
            display: table;
            clear: both;
          }

.column {
            float: left;
            width: 25%;
        }

/* The Modal (background) */
.modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 30px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
      }

/* Modal Content */
.modal-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                width: 90%;
                max-width: 1200px;
              }

/* The Close Button */
.close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
      }

.close:hover,
.close:focus {
                color: #999;
                text-decoration: none;
                cursor: pointer;
              }

.mySlides {
              display: none;
            }

.cursor {
          cursor: pointer
        }

/* Next & previous buttons */
.prev,
.next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
      }

/* Position the "next button" to the right */
.next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
              background-color: rgba(0, 0, 0, 0.8);
            }

/* Number text (1/3 etc) */
.numbertext {
              color: #f2f2f2;
              font-size: 12px;
              padding: 8px 12px;
              position: absolute;
              top: 0;
            }

img {
      margin-bottom: -4px;
    }

.caption-container {
                      text-align: center;
                      background-color: black;
                      padding: 2px 16px;
                      color: white;
                    }

.demo {
        opacity: 0.6;
      }

.active,
.demo:hover {
              opacity: 1;
            }

img.hover-shadow {
                    transition: 0.3s
                  }

.hover-shadow:hover {
                      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
                    }
</style>

<body>
<p>&nbsp;</p>
<h2 style="text-align:center">Farewell 2k18</h2>

<div class="row">
  <div class="column">
    <img src="gallery/farewell/1.jpeg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="gallery/farewell/2.jpeg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="gallery/farewell/3.jpeg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="gallery/farewell/4.jpeg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
    <div class="column">
    <img src="gallery/farewell/5.jpeg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="gallery/farewell/6.jpeg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="gallery/farewell/7.jpeg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/8.jpeg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/9.jpeg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/10.jpeg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/11.jpeg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/12.jpeg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/13.jpeg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/14.jpeg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/15.jpeg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/16.jpeg" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/17.jpeg" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/18.jpeg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/19.jpeg" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/20.jpeg" style="width:100%" onclick="openModal();currentSlide(20)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/21.jpeg" style="width:100%" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/22.jpeg" style="width:100%" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/23.jpeg" style="width:100%" onclick="openModal();currentSlide(23)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/24.jpeg" style="width:100%" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/25.jpeg" style="width:100%" onclick="openModal();currentSlide(25)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/26.jpeg" style="width:100%" onclick="openModal();currentSlide(26)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/27.jpeg" style="width:100%" onclick="openModal();currentSlide(27)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/28.jpeg" style="width:100%" onclick="openModal();currentSlide(28)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/29.jpeg" style="width:100%" onclick="openModal();currentSlide(29)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/30.jpeg" style="width:100%" onclick="openModal();currentSlide(30)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/31.jpeg" style="width:100%" onclick="openModal();currentSlide(31)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/32.jpeg" style="width:100%" onclick="openModal();currentSlide(32)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/33.jpeg" style="width:100%" onclick="openModal();currentSlide(33)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/34.jpeg" style="width:100%" onclick="openModal();currentSlide(34)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/35.jpeg" style="width:100%" onclick="openModal();currentSlide(35)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/36.jpeg" style="width:100%" onclick="openModal();currentSlide(36)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/37.jpeg" style="width:100%" onclick="openModal();currentSlide(37)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/38.jpeg" style="width:100%" onclick="openModal();currentSlide(38)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/39.jpeg" style="width:100%" onclick="openModal();currentSlide(39)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/40.jpeg" style="width:100%" onclick="openModal();currentSlide(40)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/41.jpeg" style="width:100%" onclick="openModal();currentSlide(41)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/42.jpeg" style="width:100%" onclick="openModal();currentSlide(42)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/43.jpeg" style="width:100%" onclick="openModal();currentSlide(43)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/44.jpeg" style="width:100%" onclick="openModal();currentSlide(44)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/45.jpeg" style="width:100%" onclick="openModal();currentSlide(45)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/46.jpeg" style="width:100%" onclick="openModal();currentSlide(46)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/47.jpeg" style="width:100%" onclick="openModal();currentSlide(47)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/48.jpeg" style="width:100%" onclick="openModal();currentSlide(48)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/49.jpeg" style="width:100%" onclick="openModal();currentSlide(49)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/50.jpeg" style="width:100%" onclick="openModal();currentSlide(50)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/51.jpeg" style="width:100%" onclick="openModal();currentSlide(51)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/52.jpeg" style="width:100%" onclick="openModal();currentSlide(52)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/53.jpeg" style="width:100%" onclick="openModal();currentSlide(53)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="gallery/farewell/54.jpeg" style="width:100%" onclick="openModal();currentSlide(54)" class="hover-shadow cursor">
  </div>

</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/1.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/2.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/3.jpeg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/4.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/5.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/6.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/7.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/8.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/9.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/10.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/11.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/12.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/13.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/14.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/15.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/16.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/17.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/18.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/19.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/20.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/21.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/22.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/23.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/24.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/25.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/26.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/27.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/28.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/29.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/30.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/31.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/32.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/33.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/34.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/35.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/36.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/37.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/38.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/39.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/40.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/41.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/42.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/43.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/44.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/45.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/46.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/47.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/48.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/49.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/50.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/51.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/52.jpeg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/53.jpeg" style="width:100%">
    </div>    
    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="gallery/farewell/54.jpeg" style="width:100%">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
                          var i;
                          var slides = document.getElementsByClassName("mySlides");
                          var dots = document.getElementsByClassName("demo");
                          var captionText = document.getElementById("caption");
                          if (n > slides.length) {slideIndex = 1}
                          if (n < 1) {slideIndex = slides.length}
                          for (i = 0; i < slides.length; i++) {
                                                                  slides[i].style.display = "none";
                                                              }
                          for (i = 0; i < dots.length; i++) {
                                                                dots[i].className = dots[i].className.replace(" active", "");
                                                            }
                          slides[slideIndex-1].style.display = "block";
                          dots[slideIndex-1].className += " active";
                          captionText.innerHTML = dots[slideIndex-1].alt;
                        }
</script>
<p>&nbsp;</p>    
</body>

<?php include 'below.php';
?>