document.addEventListener('alpine:init', () => {
    Alpine.data('setup', () => ({
        openSidebar: false,
        isSideOption: '',
        toggleSidebar(){
            this.openSidebar = !this.openSidebar;
        },

        // Settings
        setTabs: 'my-datas',
        openSettings: false,
        toggleSettings()
        {
            this.openSettings = !this.openSettings;
        }
    }))


});
