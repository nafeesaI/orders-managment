<x-app>
    @slot("header")
          <h1> إضافة إدارة جديدة  </h1> 
           <a href=""> <button class="back"> <i class="fa-solid fa-angle-right"></i>  </button>  </a>
    @endslot

    @slot("content")
    <div class="form-card">
        <form action="/managments/save_new" method="POST" >
             @csrf
            <div class="form-header">
                <div class="form-options">
                    <button type="submit" > حفظ </button>
                </div>
                <div class="form-title">
                    <h3> إضافة إدارة </h3>
                </div>
            </div>
  
             <div class="input-area">
                  <label for="name"> إسم الادارة </label>
                  <input type="text" id="name" name="name" autofocus >
             </div>
         </form>
    </div>
       

    @endslot
</x-app>