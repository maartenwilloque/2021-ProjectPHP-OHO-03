<!-- footer.html  -->
<footer class="fixed-bottom footerHeigth">
    <div class="row container-fluid justify-content-between">
        <div class="my-auto pl-3">
            <span class="color_Blue small"><i class="fab fa-facebook a"></i></span>
            <a class="font-weight-light color_Blue small" href="https://www.facebook.com/ThomasMoreBE" target="_blank">Thomas
                More</a>
        </div>
        <div class="pt-3"><p data-toggle="tooltip" data-placement="center"
                                     title="OHO-Team-03" class="small">
                &COPY;{{ now()->year }}
                <span>OHO-TEAM-03</span></p>
        </div>
        <div class="my-auto">
            <a href="#aboutmodal" class="small" data-toggle="modal" data-target="#aboutmodal">About</a>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="aboutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">About</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Development team</h4>
        <ul>
            <li> Erwin Van Moorleghem</li>
            <li> Alex Swaan</li>
            <li> Maarten Willoqué</li>
        </ul>
                <h4>Opdrachtgever</h4>
                <ul>
                    <li> Christel Maes</li>
                </ul>
            </div>
        </div>
    </div>
</div>


