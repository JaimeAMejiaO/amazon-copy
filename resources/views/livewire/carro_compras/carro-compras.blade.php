<div>
    <div class="d-flex">
        <div class="card col-9" style="margin-left: 50px;margin-right: 10px;border-radius: 8px;border: 2px solid black;">
            <h1 style="text-align:center">CARRITO</h1>
            <div style="border-radius: 8px;border: 2px solid black;margin: 20px;margin-bottom: 80px; ">
                <div class="d-flex" style="">
                    <div class="col-1 " style="">
                        <div class="" style="display:flex;justify-content:center;margin-top: 80px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>

                    </div>

                    <div class="d-flex col-6" style="text-align:center;margin-top: 20px;">
                        <div class="col-5" style="">
                            <img src="{{ asset('img/1.jpg') }}" class="" alt="..." width="150"
                                height="150" style=" border-radius: 8px;border: 2px solid black;margin-bottom: 10px">
                        </div>
                        <div class="col-11" style="">
                            <div class="" style="background-color:white">
                                <h2>AIR JORDAN 11</h2>

                            </div>
                            <div class="" style="margin-top: 50px;">
                                <div class="d-flex" style="">
                                    <div class="col-3"style="margin-top: 5px;">
                                        <h4 class="">CANTIDAD</h4>
                                    </div>
                                    <div class="col-2">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>


                                    <div>
                                        <button class="btn btn-outline-success text-nowrap " type="submit"
                                            data-bs-toggle="modal" data-bs-target="#crear_direccion">Editar</button>
                                        <button class="btn btn-outline-danger text-nowrap  "
                                            type="submit">Eliminar</button>
                                    </div>



                                </div>

                            </div>
                        </div>

                        <div class="col-6" style=" margin-top: 50px;">
                        <h1>120.000$</h1>
                        </div>
                    </div>


                </div>

            </div>
        </div>







        <div class="col-3" style="width: 18rem; border-radius: 8px;border: 2px solid black;">
            <div class="card-body">
                <br>
                <br>
                <h2 class="card-title" style="text-align:center">1 PRODUCTO</h2>
                <h2 class="card-title" style="text-align:center">120.000$</h2>
                <br>
                <br>

                <br>
                <div style="text-align:center">
                    <br>
                    <br>
                    <br>

                    <div>
                        <a class="btn btn-outline-dark text-nowrap" href="{{ route('metodo-pagos') }}">PROCEDER CON EL PAGO</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
