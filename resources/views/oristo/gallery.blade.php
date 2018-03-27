<div class="container  m-t-5p bd-4">
    <div class="">
        <h2 class="w-600 f21 c-white">Gallery</h2>
        <div class="row">
            @foreach($galleries as $gallery)
            <div class="col-md-3 col-sm-6">
                <a class="thumbnail no-bd" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-image="{{ asset("gallery/$gallery->image") }}" data-target="#image-gallery">
                    <img class="img-responsive width-260 h-260" src="{{ asset("gallery/$gallery->image") }}" alt="Short alt text">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>


<!-- Gallery modal -->
<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title text-center" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-1 col-sm-1"></div>
                    <div class="col-md-10 col-sm-10">
                        <img id="image-gallery-image" class="img-responsive width-470 h-430 mh-auto" src="">
                    </div>
                    <div class="col-md-1 col-sm-1"></div>
                </div>
            </div>
            <div class="modal-footer no-bd">

                <div class="col-md-2 col-xs-6">
                    <button class="btn bg-browno bd-4 c-white f4 m-t-5p m-b-5p width-70 mwidth-100p twidth-100p" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8"></div>

                <div class="col-md-2 col-xs-6">
                    <button id="show-next-image" class="btn bg-browno bd-4 c-white f4 m-t-5p m-b-5p width-70 mwidth-100p twidth-100p">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>