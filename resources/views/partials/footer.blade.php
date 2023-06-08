<div class="background">
    <div class="container d-flex justify-content-between align-items-center py-4">
        <div>
            <button class="btn btn-outline-primary text-white">SIGN-UP NOW!</button>
        </div>
        <div class="list-footer">
            <ul>
                <li>
                    <h2>FOLLOW US</h2>
                </li>
                <li v-for="(item, index) in  listIcon " :key="index">
                    <a href="#"><img :src="item.icon" alt="icon"></a>
                </li>
            </ul>
        </div>
    </div>
</div>