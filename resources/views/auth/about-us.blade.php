<x-layout>
    <x-slot name='title'>Affiliate - Sobre nosotros</x-slot>
    
    <div>
        <div class="row w-100%">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="titulo my-5">{{__('Sobre nosotros')}}</h1>
            </div>


            <div class="mb-5">
                <div class="d-flex justify-content-around" >
                    <div class="card perfiles" style="width: 18rem;">
                        <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Iván Calderón</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div>

                      <div class="card perfiles" style="width: 18rem;">
                        <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/tjTwFoFM8P9xSRYDB4q7LK.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Zalwa Elena Charif</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div>

                      <div class="card perfiles" style="width: 18rem;">
                        <img class="card-img-top" src="https://media.gq.com.mx/photos/5fd90dd22bb6278ed0bcca02/master/pass/FANTASTIC%204.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Manuel Noriega</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div>

                      <div class="card perfiles" style="width: 18rem;">
                        <img class="card-img-top" src="https://i0.wp.com/imgs.hipertextual.com/wp-content/uploads/2022/06/antorcha-humana-chris-evans.jpg?fit=2500%2C1634&quality=50&strip=all&ssl=1" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Jeiny Fernández</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div>
                </div>
            </div>
    </div>
    

</x-layout>