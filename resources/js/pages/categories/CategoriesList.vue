<template>
    <div class="categories-list">
        <h1>Categories List</h1>
        <div class="item">
            <p>Categories 1</p>
            <div>
                <a href="">Edit</a>
            </div>
            <input type="submit" value="Delete" />
        </div>

        <div class="index-categories">
            <router-link :to="{ name: 'CreateCategories' }">
                Category create <span>&#8594;</span></router-link
            >
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style scoped>
.categories-list {
    min-height: 100vh;
    background: #fff;
}
.categories-list h1 {
    font-weight: 300;
    padding: 30px 0 30px 0;
    text-align: center;
}
.categories-list .item {
    display: flex;
    justify-content: right;
    align-items: center;
    max-width: 300px;
    margin: 0 auto !important;
}
.categories-list .item p {
    font-size: 16px;
}
.categories-list .item input {
    padding: 6px 13px;
    background-color: red;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 14px;
}
.categories-list ul li {
    list-style: none;
    background-color: #494949;
    margin: 20px 5px;
    border-radius: 15px;
}
.categories-list ul {
    display: flex;
    justify-content: center;
}
.categories-list a {
    color: white;
    padding: 10px 20px;
    display: inline-block;
}
.create-categories a,
.index-categories a {
    all: revert;
    margin: 20px 0;
    display: inline-block;
    text-decoration: none;
}
.create-categories a span,
.index-categories a span {
    font-size: 22px;
}
.index-categories {
    text-align: center;
}
</style>
