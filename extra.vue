<div class="row justify-content-center">
    <router-link :to="'/category/' + category.id" v-for="category in categories" v-bind:key="category.id">
        <div class="col-md-12 category-section">
            <img :src="DomainName + category.thumbnail" class="categoryImage">
            <div class="category-matter">
                <p>{{ category.name }}</p>
                <p>{{ category.description }}</p>  
            </div>
        </div>
    </router-link>
</div>