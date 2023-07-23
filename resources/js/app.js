import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
window.setup = () => {
  return {
      isSidebarOpen: window.innerWidth >= 1024 ? true : false,
      currentSidebarTab: 'linksTab',
      isSettingsPanelOpen: false,
      isSubHeaderOpen: false,
      watchScreen() {
          if (window.innerWidth <= 1024) {
              this.isSidebarOpen = false
          }
      },
  }
}

Alpine.start();
