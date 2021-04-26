<div class="container-fluid border border-secondary mb-3" style="background-color:lightcyan;">
    <div class="row">
        <div class="col-md-3 p-1" style="background-color:lightskyblue">
            <div class="row text-center m-0">
                <h4 class="col-9 col-md-12 p-1 m-0">
                    {{ $drug->name }}
                </h4>
                <div class="col-3 col-md-12 p-1">
                    @include('drugs.destroyButton')
                </div>
            </div>
        </div>
        <div class="col-md-9 p-2">
                <div class="row m-0">
                    @foreach($drug->times()->get() as $time)
                    @include('drugs.cellOfDrugTable')

                    @endforeach

                </div>
        </div>
    </div>
</div>