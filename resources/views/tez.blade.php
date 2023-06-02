        <div style="padding-left:91%">
            <button onclick="myFunctionButton()" class="btn sortir rounded-pill mt-3"><img src="{{URL::asset('/assets/filter.png')}}" style="height:26px">  Sortir</button>
        </div>
        <div id="myDIV" style="display:none" class="sortirs">
            <div class="row m-0">
                <p class="col tosca m-0">Bidang</p>
                <span class="col"></span>
                <p class="col tosca m-0">Lokasi</p>
            </div>
            <div class="sortir-active row">
                <form action="{{route('sort-bidang')}}" method="get">
                    <input class="bidang col src rounded p-2" name="search" id="myInput2" type="text" placeholder="&#xF002; Search.." style="font-family:Arial, FontAwesome"/>
                    <button type="submit" class="invisible" id="myBtn2" onclick="window.location='{{ url('sort-bidang'); }}'"></button>
                </form>
                <span class="col"></span>
                <form action="{{route('sort-lokasi')}}" method="get">
                    <input class="lokasi col src rounded p-2" name="search" id="myInput3" type="text" placeholder="&#xF002; Search.." style="font-family:Arial, FontAwesome"/>
                    <button type="submit" class="invisible" id="myBtn3" onclick="window.location='{{ url('sort-lokasi'); }}'"></button>
                </form>
            </div>
        </div>