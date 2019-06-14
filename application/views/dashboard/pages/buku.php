<main class="column">
    <div class="notification">
        <div class="level">
            <div class="level-left">
                <div class="level-item">
                    <div class="title">Dashboard</div>
                </div>
            </div>
            <div class="level-right">
                <div class="level-item">
                    <button type="button" class="button is-small">
                        March 8, 2017 - April 6, 2017
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="level">
            <div class="level-left">

            </div>
            <div class="level-right">
                <div class="level-item">
                    <a href="javascript:void(0);" class="button is-small" data-toggle="modal"
                        data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a>
                </div>
            </div>
        </div>
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="mydata">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Penulis</th>
                    <th>Rating</th>
                    <th style="text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody id="show_data">
            </tbody>
        </table>
    </div>

    <div class="modal" id="Modal_Add">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <!-- Content ... -->
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success">Save changes</button>
                <button class="button">Cancel</button>
            </footer>
        </div>
    </div>

</main>