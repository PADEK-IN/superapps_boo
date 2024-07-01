<x-karyawan-layout>
    <h3 class="mb-2 text-center">List History Perizinan</h3>
    <a href="/izin/create" class="btn-login btn btn-lg btn-default shadow-sm mb-5">Buat Izin</a>
    <!-- main page content -->
    <div class="main-container container top-20">
        <!-- Chat list   -->
        <div class="row">
            <div class="col-12 px-0">
                <div class="list-group list-group-flush bg-none rounded-0">
                    <x-list-absen 
                        image="assets/img/user1.jpg" 
                        name="Williums" 
                        description="Will deliver your order" 
                        time="last week" 
                    />
                    <div class="list-group-item text-center py-2 text-opac">This month</div>
                    <x-list-absen 
                        image="assets/img/user3.jpg" 
                        name="Williums" 
                        description="Will deliver your order" 
                        time="2 week ago" 
                    />
                    <x-list-absen 
                    image="assets/img/user2.jpg" 
                    name="Maxartkillers" 
                    description="Will deliver your order" 
                    time="2 week ago" 
                    />
                    <x-list-absen 
                        image="assets/img/user1.jpg" 
                        name="Johnson" 
                        description="is now available to take your order. tap to continue order in your cart." 
                        time="2 week ago" 
                    />
                    <div class="list-group-item text-center py-2 text-opac">Earlier</div>
                    <x-list-absen 
                    image="assets/img/user2.jpg" 
                    name="Maxartkillers" 
                    description="Will deliver your order" 
                    time="1 mounth ago" 
                    />
                    <div class="list-group-item text-center py-2 text-opac">This month</div>
                    <x-list-absen 
                        image="assets/img/user3.jpg" 
                        name="Silvasaa" 
                        description="is now available to take your order. tap to
                                    continue order in your cart." 
                        time="2 week ago" 
                    />
                </div>
            </div>
        </div>
    </div>
    <!-- main page content ends -->
</x-karyawan-layout>

