<template>
    <div class="layout">
        <Sidebar />
        <div class="content">
            <router-view />
        </div>
        <Footer />
    </div>
</template>

<script>
import Sidebar from "@/backend/layouts/sidebar.vue";
import Footer from "@/backend/layouts/footer.vue";

export default {
    components: { Sidebar, Footer }
};
</script>
