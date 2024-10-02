<?php
/**
 * Plugin Name: Simple Calculator Plugin
 * Plugin URI: #
 * Description: A simple calculator plugin using JavaScript.
 * Version: 1.0
 * Author: Your Nic Orton
 * Author URI: #
 */

// Enqueue the JavaScript and CSS
function simple_calculator_assets() {
    wp_enqueue_script('simple-calculator-js', plugin_dir_url(__FILE__) . 'calculator.js', array(), '1.0', true);
    wp_enqueue_style('simple-calculator-css', plugin_dir_url(__FILE__) . 'calculator.css');
}

add_action('wp_enqueue_scripts', 'simple_calculator_assets');

// Create the calculator HTML with a shortcode
function simple_calculator_shortcode() {
    return '
        <div id="calculator">
            <input type="text" id="calc-display" readonly>
            <div id="calc-buttons">
                <button class="calc-btn" data-value="7">7</button>
                <button class="calc-btn" data-value="8">8</button>
                <button class="calc-btn" data-value="9">9</button>
                <button class="calc-btn" data-value="/">/</button>
                <button class="calc-btn" data-value="4">4</button>
                <button class="calc-btn" data-value="5">5</button>
                <button class="calc-btn" data-value="6">6</button>
                <button class="calc-btn" data-value="*">*</button>
                <button class="calc-btn" data-value="1">1</button>
                <button class="calc-btn" data-value="2">2</button>
                <button class="calc-btn" data-value="3">3</button>
                <button class="calc-btn" data-value="-">-</button>
                <button class="calc-btn" data-value="0">0</button>
                <button class="calc-btn" data-value=".">.</button>
                <button class="calc-btn" data-value="=">=</button>
                <button class="calc-btn" data-value="+">+</button>
                <button class="calc-btn" id="calc-clear">C</button>
            </div>
        </div>';
}

add_shortcode('simple_calculator', 'simple_calculator_shortcode');
