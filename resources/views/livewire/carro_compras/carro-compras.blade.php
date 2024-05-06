<div style="background-color:#F2F2F2;height:100vh">
    <br>
    <h1 style="text-align:center;;font-size: 2.5rem; font-weight: bold;background-color:#F2F2F2">CARRITO</h1>
    <div class="d-flex" style="margin-top:2%;">

        <div class="card col-8" style="margin-left: 4%;margin-right: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">

            <div style="margin-bottom: 80px; ">
                <div class="d-flex" style="">
                    <div class="col-1 " style="">
                        <div class="" style="display:flex;justify-content:center;margin-top: 80px;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>

                    </div>

                    <div class="d-flex col-6" style="text-align:center;margin-top: 20px;">
                        <div class="img-thumbnail mb-1" style="">
                            <img src="{{ asset('img/1.jpg') }}" class="" alt="..." width="150"
                                height="150" style="">
                        </div>
                        <div class="col-11" style="">
                            <div class="" style="">
                                <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                    style="font-size: 200%;font-weight:bold;text-align:center">AIR JORDAN 11</h2>


                            </div>
                            <div class="" style="margin-top: 30px;">
                                <div class="d-flex" style="">
                                    <div class="col-3"style="margin-top: 5px;margin-left: 20px;">

                                        <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                            style="font-size: 150%;font-weight:bold;text-align:center">CANTIDAD</h2>
                                    </div>
                                    <div class="col-2">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>






                                </div>


                                <div class="text-start" style="margin-top: 5%;margin-left: 5%;">
                                    <button class="btn btn-warning text-nowrap" type="submit">Editar</button>
                                    <button class="btn btn-dark text-nowrap" type="submit">Eliminar</button>
                                </div>


                            </div>


                        </div>

                        <div class="col-3"style="margin-top: 5px;">

                            <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                style="font-size: 180%;font-weight:bold;text-align:center;MARGIN-TOP:20%">$120.000</h2>
                        </div>
                    </div>


                </div>

            </div>
        </div>







        <div class="col-3" style="width: 18rem; border-radius: 8px;border: 2px solid black;background-color:#F2F2F2">
            <div class="card-body">
                <br>
                <br>
                <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 250%;font-weight:bold;text-align:center">Total</h2>
                <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 200%;font-weight:bold;text-align:center">120.000$</h2>
                <br>
                <br>

                <br>
                <div style="text-align:center">
                    <br>
                    <br>
                    <br>

                    <div>
                        <a class="btn btn-outline-dark text-nowrap" href="{{ route('metodo-pagos') }}">PROCEDER CON EL
                            PAGO</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
