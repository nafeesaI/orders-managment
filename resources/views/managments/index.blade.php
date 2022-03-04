<x-app>
    @slot("header")
          <h1> الإدارات </h1> 
           <a></a>
           {{-- <a></a>    دا بنحفظ بيهو المكان ف التقسيم عشانن م يبوظ   --}}
    @endslot

    @slot("content")
    <div class="list-card">
        
            <div class="list-header">
                <div class="list-options">
                  <a href="/managments/add"><button type="button" >  إضافة إدارة جديدة  </button> </a>  
                </div>
                <div class="list-title">
                    <h3>  قائـمة الادارات </h3>
                </div>
            </div>

            <div class="list" >
                @foreach ($managments as $mana)
               
                    <div class="item">

                        <div class="item-options">
                            <a href="/managments/delete/{{$mana->id}}"><button type="button" class="dele fa fa-trash "> </button> </a>  
                            <a href="/managments/edit/{{$mana->id}}"><button type="button" class="edit fa fa-edit "> </button> </a>  

                        </div>

                        <a href="managments/info/{{ $mana->id }}">
                            <div class="item-title">
                                <h3> {{ $mana->name }} </h3>
                            </div>
                        </a>

                    </div>
            
                @endforeach
            </div>
            
    </div>
       

    @endslot
</x-app>