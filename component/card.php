<?php

function card($productid, $productname, $productprice, $productimg) {
  $element = "
  <div class=\"card\">
    <form action=\"index.php\" method=\"post\">
      <a href=\"overview.php?id=$productid\">
        <div class=\"image\">
          <img src=\"img/$productimg\">
        </div>
      </a>
      <p class=\"price\">$$productprice</p>
      <p class=\"name\">$productname</p>
      <div class=\"card-footer\">
        <a href=\"\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"#0bc655\" class=\"bi bi-chat-dots\" viewBox=\"0 0 16 16\">
            <path d=\"M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z\"/>
            <path d=\"m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z\"/>
          </svg>
        </a>&ensp;
        <a href=\"overview.php?id=$productid\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"#0bc655\" class=\"bi bi-eye\" viewBox=\"0 0 16 16\">
            <path d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z\"/>
            <path d=\"M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z\"/>
          </svg>
        </a>
        <button type=\"submit\" class=\"add2cart\" name=\"add\">Add to Cart</button>
        <input type='hidden' name='product_id' value='$productid'>
      </div>
      </form>
    </div>
  ";
  echo $element;
}

function cart($productid, $productname, $productprice, $productimg) {
  $element = "
<form action=\"cart.php?action=delete&id=$productid\" method=\"post\" class=\"cart-items\">
  <div class=\"card\">
      <a href=\"overview.php?id=$productid\">
        <div class=\"image\">
          <img src=\"img/$productimg\">
        </div>
      </a>
      <div class=\"main-left\">
        <div class=\"name\">$productname</div>
        <hr class=\"line\">
        <div class=\"price\">$$productprice</div><br><br>
        <div class=\"sisa\"><small>Tersisa 20 produk</small></div>
      </div>
      <div class=\"main-right\">
        <div class=\"qty\">
          <button type=\"submit\" class=\"delete\" name=\"delete\" id=\"delete\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"#fa0542\" class=\"bi bi-file-x-fill\" viewBox=\"0 0 16 16\">
              <path d=\"M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM6.854 6.146 8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 1 1 .708-.708z\"/>
            </svg>
          </button>
          <button class=\"minus\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"#fa0542\" class=\"bi bi-file-minus-fill\" viewBox=\"0 0 16 16\">
              <path d=\"M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM6 7.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1z\"/>
            </svg>
          </button>
          <input type=\"text\" value=\"1\" disabled>
          <button class=\"plus\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"#0bc655\" class=\"bi bi-file-plus-fill\" viewBox=\"0 0 16 16\">
              <path d=\"M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z\"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </form>
";
  echo $element;
}


function overview($productid, $productname, $productprice, $productimg) {
  $element = "
  <div class=\"main-L\">
    <div class=\"image\">
      <img src=\"img/$productimg\" >
    </div>
    <div class=\"slide\">
      <div class=\"opt-1\">
        <img src=\"\">
      </div>
      <div class=\"opt-1\">
        <img src=\"\">
      </div>
      <div class=\"opt-1\">
        <img src=\"\">
      </div>
      <div class=\"opt-1\">
        <img src=\"\">
      </div>
    </div>
  </div>
  <div class=\"main-R\">
    <div class=\"category\">Electronic</div>
    <div class=\"name\">$productname</div>
    <div class=\"description\">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum earum quae eius facilis totam, libero ut saepe doloremque veniam perferendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, reiciendis.</div>
    <div class=\"amount\">
      <div class=\"price\">$$productprice</div>
    </div>
    <div class=\"button-group\">
      <button type=\"button\" class=\"chat\">Chat Seller</button>
      <button type=\"button\" class=\"cart\">Add to Cart</button>
    </div>
  </div>
  ";
  echo $element;
}

function setting() {
  $element = "
  <div class=\"container\">
    <div class=\"main\">
      <div class=\"left\">
        <div class=\"photo\">
          <img src=\"img/pp.jpg\" alt=\"\">
        </div>
        <button class=\"btn-left\">Change Photo</button>
          <button class=\"btn-left\">Change Password</button>
          <button class=\"btn-left\">Addres List</button>
      </div>
      <div class=\"right\">
        <h1>Biodata</h1>
      <label for=\"\" class=\"label\">Nama</label>
      <div class=\"biodata\">Danang Setiadi <a href=\"\">Edit</a></div>
      <br><br>
      <label for=\"\" class=\"label\">NIM</label>
      <div class=\"biodata\">222355201036 <a href=\"\">Edit</a></div>
      <br><br>
      <label for=\"\" class=\"label\">Program Studi/Semester </label>
      <div class=\"biodata\">Teknik Informatika/2 <a href=\"\">Edit</a></div>
      <br><br>
      <label for=\"\" class=\"label\">Mata Kuliah</label>
      <div class=\"biodata\">Pemrograman Berorientasi Objek <a href=\"\">Edit</a></div>
      <br><br>
      <label for=\"\" class=\"label\">Nomor Handphone</label>
      <div class=\"biodata\">085335837454 <a href=\"\">Edit</a></div>
      </div>
    </div>
  </div>
  ";
  echo $element;
}

function signIn() {
  $element = "
  <div class=\"container-1\">
    <div class=\"head\">
    <svg class=\"heading\" xmlns=\"http://www.w3.org/2000/svg\" width=\"100\" height=\"100\" fill=\"#05c977\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\">
      <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z\"/>
    </svg>
    <h1>SIGN IN</h1>
    </div>
    <form action=\"\" method=\"post\">
      <div class=\"form\">
      <div class=\"username\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"38\" height=\"38\" fill=\"#000000d0\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\">
          <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z\"/>
        </svg>
        <input type=\"text\" placeholder=\"Username\" name=\"username\" id=\"username\" autocomplete=\"off\" required>
      </div><br>
      <div class=\"password\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"38\" height=\"38\" fill=\"#000000d0\" class=\"bi bi-key-fill\" viewBox=\"0 0 16 16\">
          <path d=\"M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z\"/>
        </svg>
        <input type=\"password\" placeholder=\"Password\" name=\"password\" id=\"password\" required>
      </div><br>
      <button type=\"submit\" name=\"btn\" id=\"btn\">SIGN IN</button>
      <div class=\"link\">
        <label for=\"\">Do not have an account yet?</label>
        <a href=\"sign-up.php\">Create Account</a>
      </div>
    </div>
  </form>
  </div>
  ";
  echo $element;
}

function signUp() {
  $element = "
  <div class=\"container\">
    <div class=\"head\">
      <svg class=\"heading\" xmlns=\"http://www.w3.org/2000/svg\" width=\"100\" height=\"100\" fill=\"#05c977\" class=\"bi bi-person-fill-add\" viewBox=\"0 0 16 16\">
      <path d=\"M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\"/>
      <path d=\"M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z\"/>
    </svg>
    <h1>SIGN UP</h1>
    </div>
    <form action=\"\" method=\"post\">
      <div class=\"form\">
        <div class=\"username\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"38\" height=\"38\" fill=\"#000000d0\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\">
            <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z\"/>
          </svg>
          <input type=\"text\" placeholder=\"Your Name\" name=\"your-name\" id=\"your-name\" autocomplete=\"off\" required>
        </div><br>
        <div class=\"username\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"38\" height=\"38\" fill=\"#000000d0\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\">
            <path d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z\"/>
          </svg>
          <input type=\"text\" placeholder=\"Username\" name=\"username\" id=\"username\" autocomplete=\"off\" required>
        </div><br>
        <div class=\"password\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"38\" height=\"38\" fill=\"#000000d0\" class=\"bi bi-key-fill\" viewBox=\"0 0 16 16\">
            <path d=\"M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z\"/>
          </svg>
          <input type=\"password\" placeholder=\"Password\" name=\"password\" id=\"password\" required>
        </div><br>
        <div class=\"password-confirm\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"38\" height=\"38\" fill=\"#000000d0\" class=\"bi bi-key\" viewBox=\"0 0 16 16\">
            <path d=\"M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z\"/>
            <path d=\"M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
          </svg>
          <input type=\"password\" placeholder=\"Password Confirmation\" name=\"password-confirm\" id=\"password-confirm\" required>
        </div><br>
        <button type=\"submit\" name=\"btn\" id=\"btn\">SIGN UP</button>
        <div class=\"link\">
          <label for=\"\">Already have an account?</label>
          <a href=\"sign-in.php\">Sign In</a>
        </div>
      </div>
    </form>
  </div>
  ";
  echo $element;
}

?>