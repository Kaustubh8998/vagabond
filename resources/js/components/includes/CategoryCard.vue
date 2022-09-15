<template>
    <div class="col-md-4 p-0">
        
        <div class="category-card">
            <img :src="DomainName + category.thumbnail" class="categoryImage">
            <div class="d-flex justify-content-between category-details">

                <div>

                    <div class="category-name">{{ category.name }}</div>
                
                    <p class="category-description">{{ category.description }}</p>

                </div>

            </div>
            
        </div>
         
    </div>
</template>

<script>
    export default {
        data () {
            return {
                DomainName: window.DomainName
            }
        },
        props: ['category']
    }
</script>

<style scoped>

    .category-card {
        position: relative;
        margin: 10px;
    }

    .category-details {
        position: absolute;
        top: 0;
        color: #fff;
        font-size: 12px;
        padding: 22px;
        width: 100%;
        height: 100%;
        background: #00000080;
        align-items: center;
    }

</style>
