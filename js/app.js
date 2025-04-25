// Import Alpine.js for interactivity
import Alpine from 'alpinejs'
import persist from '@alpinejs/persist'

// Add Alpine plugins
Alpine.plugin(persist)

// Make Alpine available globally
window.Alpine = Alpine

// Initialize Alpine
Alpine.start() 