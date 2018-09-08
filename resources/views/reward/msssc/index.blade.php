<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <title>秒速時時彩</title>
    <style type="text/css">.mint-header {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #26a2ff;
            box-sizing: border-box;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-size: 14px;
            height: 40px;
            line-height: 1;
            padding: 0 10px;
            position: relative;
            text-align: center;
            white-space: nowrap
        }

        .mint-header .mint-button {
            background-color: transparent;
            border: 0;
            box-shadow: none;
            color: inherit;
            display: inline-block;
            padding: 0;
            font-size: inherit
        }

        .mint-header .mint-button:after {
            content: none
        }

        .mint-header.is-fixed {
            top: 0;
            right: 0;
            left: 0;
            position: fixed;
            z-index: 1
        }

        .mint-header-button {
            -webkit-box-flex: .5;
            -ms-flex: .5;
            flex: .5
        }

        .mint-header-button > a {
            color: inherit
        }

        .mint-header-button.is-right {
            text-align: right
        }

        .mint-header-button.is-left {
            text-align: left
        }

        .mint-header-title {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            font-size: inherit;
            font-weight: 400;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1
        }

        .mint-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 4px;
            border: 0;
            box-sizing: border-box;
            color: inherit;
            display: block;
            font-size: 18px;
            height: 41px;
            outline: 0;
            overflow: hidden;
            position: relative;
            text-align: center
        }

        .mint-button:after {
            background-color: #000;
            content: " ";
            opacity: 0;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            position: absolute
        }

        .mint-button:not(.is-disabled):active:after {
            opacity: .4
        }

        .mint-button.is-disabled {
            opacity: .6
        }

        .mint-button-icon {
            vertical-align: middle;
            display: inline-block
        }

        .mint-button--default {
            color: #656b79;
            background-color: #f6f8fa;
            box-shadow: 0 0 1px #b8bbbf
        }

        .mint-button--default.is-plain {
            border: 1px solid #5a5a5a;
            background-color: transparent;
            box-shadow: none;
            color: #5a5a5a
        }

        .mint-button--primary {
            color: #fff;
            background-color: #26a2ff
        }

        .mint-button--primary.is-plain {
            border: 1px solid #26a2ff;
            background-color: transparent;
            color: #26a2ff
        }

        .mint-button--danger {
            color: #fff;
            background-color: #ef4f4f
        }

        .mint-button--danger.is-plain {
            border: 1px solid #ef4f4f;
            background-color: transparent;
            color: #ef4f4f
        }

        .mint-button--large {
            display: block;
            width: 100%
        }

        .mint-button--normal, .mint-button--small {
            display: inline-block;
            padding: 0 12px
        }

        .mint-button--small {
            font-size: 14px;
            height: 33px
        }

        .mint-cell {
            background-color: #fff;
            box-sizing: border-box;
            color: inherit;
            min-height: 48px;
            display: block;
            overflow: hidden;
            position: relative;
            text-decoration: none
        }

        .mint-cell img {
            vertical-align: middle
        }

        .mint-cell:first-child .mint-cell-wrapper {
            background-origin: border-box
        }

        .mint-cell:last-child {
            background-image: linear-gradient(0deg, #d9d9d9, #d9d9d9 50%, transparent 0);
            background-size: 100% 1px;
            background-repeat: no-repeat;
            background-position: bottom
        }

        .mint-cell-wrapper {
            background-image: linear-gradient(180deg, #d9d9d9, #d9d9d9 50%, transparent 0);
            background-size: 120% 1px;
            background-repeat: no-repeat;
            background-position: 0 0;
            background-origin: content-box;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            box-sizing: border-box;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-size: 16px;
            line-height: 1;
            min-height: inherit;
            overflow: hidden;
            padding: 0 10px;
            width: 100%
        }

        .mint-cell-mask:after {
            background-color: #000;
            content: " ";
            opacity: 0;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            position: absolute
        }

        .mint-cell-mask:active:after {
            opacity: .1
        }

        .mint-cell-text {
            vertical-align: middle
        }

        .mint-cell-label {
            color: #888;
            display: block;
            font-size: 12px;
            margin-top: 6px
        }

        .mint-cell-title {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1
        }

        .mint-cell-value {
            color: #888;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .mint-cell-value.is-link {
            margin-right: 24px
        }

        .mint-cell-left {
            position: absolute;
            height: 100%;
            left: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }

        .mint-cell-right {
            position: absolute;
            height: 100%;
            right: 0;
            top: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        .mint-cell-allow-right:after {
            border: 2px solid #c8c8cd;
            border-bottom-width: 0;
            border-left-width: 0;
            content: " ";
            top: 50%;
            right: 20px;
            position: absolute;
            width: 5px;
            height: 5px;
            -webkit-transform: translateY(-50%) rotate(45deg);
            transform: translateY(-50%) rotate(45deg)
        }

        .mint-cell-swipe .mint-cell-wrapper {
            position: relative
        }

        .mint-cell-swipe .mint-cell-left, .mint-cell-swipe .mint-cell-right, .mint-cell-swipe .mint-cell-wrapper {
            transition: -webkit-transform .15s ease-in-out;
            transition: transform .15s ease-in-out;
            transition: transform .15s ease-in-out, -webkit-transform .15s ease-in-out
        }

        .mint-cell-swipe-buttongroup {
            height: 100%
        }

        .mint-cell-swipe-button {
            height: 100%;
            display: inline-block;
            padding: 0 10px;
            line-height: 48px
        }

        .mint-field {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .mint-field .mint-cell-title {
            width: 105px;
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none
        }

        .mint-field .mint-cell-value {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            color: inherit;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .mint-field.is-nolabel .mint-cell-title {
            display: none
        }

        .mint-field.is-textarea {
            -webkit-box-align: inherit;
            -ms-flex-align: inherit;
            align-items: inherit
        }

        .mint-field.is-textarea .mint-cell-title {
            padding: 10px 0
        }

        .mint-field.is-textarea .mint-cell-value {
            padding: 5px 0
        }

        .mint-field-core {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0;
            border: 0;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            outline: 0;
            line-height: 1.6;
            font-size: inherit;
            width: 100%
        }

        .mint-field-clear {
            opacity: .2
        }

        .mint-field-state {
            color: inherit;
            margin-left: 20px
        }

        .mint-field-state .mintui {
            font-size: 20px
        }

        .mint-field-state.is-default {
            margin-left: 0
        }

        .mint-field-state.is-success {
            color: #4caf50
        }

        .mint-field-state.is-warning {
            color: #ffc107
        }

        .mint-field-state.is-error {
            color: #f44336
        }

        .mint-field-other {
            top: 0;
            right: 0;
            position: relative
        }

        .mint-badge {
            color: #fff;
            text-align: center;
            display: inline-block
        }

        .mint-badge.is-size-large {
            border-radius: 14px;
            font-size: 18px;
            padding: 2px 10px
        }

        .mint-badge.is-size-small {
            border-radius: 8px;
            font-size: 12px;
            padding: 2px 6px
        }

        .mint-badge.is-size-normal {
            border-radius: 12px;
            font-size: 15px;
            padding: 2px 8px
        }

        .mint-badge.is-warning {
            background-color: #ffc107
        }

        .mint-badge.is-error {
            background-color: #f44336
        }

        .mint-badge.is-primary {
            background-color: #26a2ff
        }

        .mint-badge.is-success {
            background-color: #4caf50
        }

        .mint-switch {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative
        }

        .mint-switch * {
            pointer-events: none
        }

        .mint-switch-label {
            margin-left: 10px;
            display: inline-block
        }

        .mint-switch-label:empty {
            margin-left: 0
        }

        .mint-switch-core {
            display: inline-block;
            position: relative;
            width: 52px;
            height: 32px;
            border: 1px solid #d9d9d9;
            border-radius: 16px;
            box-sizing: border-box;
            background: #d9d9d9
        }

        .mint-switch-core:after, .mint-switch-core:before {
            content: " ";
            top: 0;
            left: 0;
            position: absolute;
            transition: -webkit-transform .3s;
            transition: transform .3s;
            transition: transform .3s, -webkit-transform .3s;
            border-radius: 15px
        }

        .mint-switch-core:after {
            width: 30px;
            height: 30px;
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .4)
        }

        .mint-switch-core:before {
            width: 50px;
            height: 30px;
            background-color: #fdfdfd
        }

        .mint-switch-input {
            display: none
        }

        .mint-switch-input:checked + .mint-switch-core {
            border-color: #26a2ff;
            background-color: #26a2ff
        }

        .mint-switch-input:checked + .mint-switch-core:before {
            -webkit-transform: scale(0);
            transform: scale(0)
        }

        .mint-switch-input:checked + .mint-switch-core:after {
            -webkit-transform: translateX(20px);
            transform: translateX(20px)
        }

        .mint-spinner-snake {
            -webkit-animation: mint-spinner-rotate .8s infinite linear;
            animation: mint-spinner-rotate .8s infinite linear;
            border: 4px solid transparent;
            border-radius: 50%
        }

        @-webkit-keyframes mint-spinner-rotate {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        @keyframes mint-spinner-rotate {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        .mint-spinner-double-bounce {
            position: relative
        }

        .mint-spinner-double-bounce-bounce1, .mint-spinner-double-bounce-bounce2 {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            opacity: .6;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-animation: mint-spinner-double-bounce 2s infinite ease-in-out;
            animation: mint-spinner-double-bounce 2s infinite ease-in-out
        }

        .mint-spinner-double-bounce-bounce2 {
            -webkit-animation-delay: -1s;
            animation-delay: -1s
        }

        @-webkit-keyframes mint-spinner-double-bounce {
            0%, to {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes mint-spinner-double-bounce {
            0%, to {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        .mint-spinner-triple-bounce-bounce1, .mint-spinner-triple-bounce-bounce2, .mint-spinner-triple-bounce-bounce3 {
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: mint-spinner-triple-bounce 1.4s infinite ease-in-out both;
            animation: mint-spinner-triple-bounce 1.4s infinite ease-in-out both
        }

        .mint-spinner-triple-bounce-bounce1 {
            -webkit-animation-delay: -.32s;
            animation-delay: -.32s
        }

        .mint-spinner-triple-bounce-bounce2 {
            -webkit-animation-delay: -.16s;
            animation-delay: -.16s
        }

        @-webkit-keyframes mint-spinner-triple-bounce {
            0%, 80%, to {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            40% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes mint-spinner-triple-bounce {
            0%, 80%, to {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            40% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        .mint-spinner-fading-circle {
            position: relative
        }

        .mint-spinner-fading-circle-circle {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: absolute
        }

        .mint-spinner-fading-circle-circle:before {
            content: " ";
            display: block;
            margin: 0 auto;
            width: 15%;
            height: 15%;
            border-radius: 100%;
            -webkit-animation: mint-fading-circle 1.2s infinite ease-in-out both;
            animation: mint-fading-circle 1.2s infinite ease-in-out both
        }

        .mint-spinner-fading-circle-circle.is-circle2 {
            -webkit-transform: rotate(30deg);
            transform: rotate(30deg)
        }

        .mint-spinner-fading-circle-circle.is-circle2:before {
            -webkit-animation-delay: -1.1s;
            animation-delay: -1.1s
        }

        .mint-spinner-fading-circle-circle.is-circle3 {
            -webkit-transform: rotate(60deg);
            transform: rotate(60deg)
        }

        .mint-spinner-fading-circle-circle.is-circle3:before {
            -webkit-animation-delay: -1s;
            animation-delay: -1s
        }

        .mint-spinner-fading-circle-circle.is-circle4 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .mint-spinner-fading-circle-circle.is-circle4:before {
            -webkit-animation-delay: -.9s;
            animation-delay: -.9s
        }

        .mint-spinner-fading-circle-circle.is-circle5 {
            -webkit-transform: rotate(120deg);
            transform: rotate(120deg)
        }

        .mint-spinner-fading-circle-circle.is-circle5:before {
            -webkit-animation-delay: -.8s;
            animation-delay: -.8s
        }

        .mint-spinner-fading-circle-circle.is-circle6 {
            -webkit-transform: rotate(150deg);
            transform: rotate(150deg)
        }

        .mint-spinner-fading-circle-circle.is-circle6:before {
            -webkit-animation-delay: -.7s;
            animation-delay: -.7s
        }

        .mint-spinner-fading-circle-circle.is-circle7 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .mint-spinner-fading-circle-circle.is-circle7:before {
            -webkit-animation-delay: -.6s;
            animation-delay: -.6s
        }

        .mint-spinner-fading-circle-circle.is-circle8 {
            -webkit-transform: rotate(210deg);
            transform: rotate(210deg)
        }

        .mint-spinner-fading-circle-circle.is-circle8:before {
            -webkit-animation-delay: -.5s;
            animation-delay: -.5s
        }

        .mint-spinner-fading-circle-circle.is-circle9 {
            -webkit-transform: rotate(240deg);
            transform: rotate(240deg)
        }

        .mint-spinner-fading-circle-circle.is-circle9:before {
            -webkit-animation-delay: -.4s;
            animation-delay: -.4s
        }

        .mint-spinner-fading-circle-circle.is-circle10 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg)
        }

        .mint-spinner-fading-circle-circle.is-circle10:before {
            -webkit-animation-delay: -.3s;
            animation-delay: -.3s
        }

        .mint-spinner-fading-circle-circle.is-circle11 {
            -webkit-transform: rotate(300deg);
            transform: rotate(300deg)
        }

        .mint-spinner-fading-circle-circle.is-circle11:before {
            -webkit-animation-delay: -.2s;
            animation-delay: -.2s
        }

        .mint-spinner-fading-circle-circle.is-circle12 {
            -webkit-transform: rotate(330deg);
            transform: rotate(330deg)
        }

        .mint-spinner-fading-circle-circle.is-circle12:before {
            -webkit-animation-delay: -.1s;
            animation-delay: -.1s
        }

        @-webkit-keyframes mint-fading-circle {
            0%, 39%, to {
                opacity: 0
            }
            40% {
                opacity: 1
            }
        }

        @keyframes mint-fading-circle {
            0%, 39%, to {
                opacity: 0
            }
            40% {
                opacity: 1
            }
        }

        .mint-tab-item {
            display: block;
            padding: 7px 0;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            text-decoration: none
        }

        .mint-tab-item-icon {
            width: 24px;
            height: 24px;
            margin: 0 auto 5px
        }

        .mint-tab-item-icon:empty {
            display: none
        }

        .mint-tab-item-icon > * {
            display: block;
            width: 100%;
            height: 100%
        }

        .mint-tab-item-label {
            color: inherit;
            font-size: 12px;
            line-height: 1
        }

        .mint-tab-container-item {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%
        }

        .mint-tab-container {
            overflow: hidden;
            position: relative
        }

        .mint-tab-container .swipe-transition {
            transition: -webkit-transform .15s ease-in-out;
            transition: transform .15s ease-in-out;
            transition: transform .15s ease-in-out, -webkit-transform .15s ease-in-out
        }

        .mint-navbar, .mint-tab-container-wrap {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .mint-navbar {
            background-color: #fff;
            text-align: center
        }

        .mint-navbar .mint-tab-item {
            padding: 17px 0;
            font-size: 15px
        }

        .mint-navbar .mint-tab-item:last-child {
            border-right: 0
        }

        .mint-navbar .mint-tab-item.is-selected {
            border-bottom: 3px solid #26a2ff;
            color: #26a2ff;
            margin-bottom: -3px
        }

        .mint-navbar.is-fixed {
            top: 0;
            right: 0;
            left: 0;
            position: fixed;
            z-index: 1
        }

        .mint-tabbar {
            background-image: linear-gradient(180deg, #d9d9d9, #d9d9d9 50%, transparent 0);
            background-size: 100% 1px;
            background-repeat: no-repeat;
            background-position: 0 0;
            position: relative;
            background-color: #fafafa;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            right: 0;
            bottom: 0;
            left: 0;
            position: absolute;
            text-align: center
        }

        .mint-tabbar > .mint-tab-item.is-selected {
            background-color: #eaeaea;
            color: #26a2ff
        }

        .mint-tabbar.is-fixed {
            right: 0;
            bottom: 0;
            left: 0;
            position: fixed;
            z-index: 1
        }

        .mint-search {
            height: 100%;
            height: 100vh;
            overflow: hidden
        }

        .mint-searchbar {
            position: relative;
            background-color: #d9d9d9;
            box-sizing: border-box;
            padding: 8px 10px;
            z-index: 1
        }

        .mint-searchbar, .mint-searchbar-inner {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .mint-searchbar-inner {
            background-color: #fff;
            border-radius: 2px;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            height: 28px;
            padding: 4px 6px
        }

        .mint-searchbar-inner .mintui-search {
            font-size: 12px;
            color: #d9d9d9
        }

        .mint-searchbar-core {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border: 0;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            outline: 0
        }

        .mint-searchbar-cancel {
            color: #26a2ff;
            margin-left: 10px;
            text-decoration: none
        }

        .mint-search-list {
            overflow: auto;
            padding-top: 44px;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            position: absolute
        }

        .mint-checklist .mint-cell {
            padding: 0
        }

        .mint-checklist.is-limit .mint-checkbox-core:not(:checked) {
            background-color: #d9d9d9;
            border-color: #d9d9d9
        }

        .mint-checklist-label {
            display: block;
            padding: 0 10px
        }

        .mint-checklist-title {
            color: #888;
            display: block;
            font-size: 12px;
            margin: 8px
        }

        .mint-checkbox.is-right {
            float: right
        }

        .mint-checkbox-label {
            vertical-align: middle;
            margin-left: 6px
        }

        .mint-checkbox-input {
            display: none
        }

        .mint-checkbox-input:checked + .mint-checkbox-core {
            background-color: #26a2ff;
            border-color: #26a2ff
        }

        .mint-checkbox-input:checked + .mint-checkbox-core:after {
            border-color: #fff;
            -webkit-transform: rotate(45deg) scale(1);
            transform: rotate(45deg) scale(1)
        }

        .mint-checkbox-input[disabled] + .mint-checkbox-core {
            background-color: #d9d9d9;
            border-color: #ccc
        }

        .mint-checkbox-core {
            display: inline-block;
            background-color: #fff;
            border-radius: 100%;
            border: 1px solid #ccc;
            position: relative;
            width: 20px;
            height: 20px;
            vertical-align: middle
        }

        .mint-checkbox-core:after {
            border: 2px solid transparent;
            border-left: 0;
            border-top: 0;
            content: " ";
            top: 3px;
            left: 6px;
            position: absolute;
            width: 4px;
            height: 8px;
            -webkit-transform: rotate(45deg) scale(0);
            transform: rotate(45deg) scale(0);
            transition: -webkit-transform .2s;
            transition: transform .2s;
            transition: transform .2s, -webkit-transform .2s
        }

        .mint-radiolist .mint-cell {
            padding: 0
        }

        .mint-radiolist-label {
            display: block;
            padding: 0 10px
        }

        .mint-radiolist-title {
            font-size: 12px;
            margin: 8px;
            display: block;
            color: #888
        }

        .mint-radio.is-right {
            float: right
        }

        .mint-radio-label {
            vertical-align: middle;
            margin-left: 6px
        }

        .mint-radio-input {
            display: none
        }

        .mint-radio-input:checked + .mint-radio-core {
            background-color: #26a2ff;
            border-color: #26a2ff
        }

        .mint-radio-input:checked + .mint-radio-core:after {
            background-color: #fff;
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        .mint-radio-input[disabled] + .mint-radio-core {
            background-color: #d9d9d9;
            border-color: #ccc
        }

        .mint-radio-core {
            box-sizing: border-box;
            display: inline-block;
            background-color: #fff;
            border-radius: 100%;
            border: 1px solid #ccc;
            position: relative;
            width: 20px;
            height: 20px;
            vertical-align: middle
        }

        .mint-radio-core:after {
            content: " ";
            border-radius: 100%;
            top: 5px;
            left: 5px;
            position: absolute;
            width: 8px;
            height: 8px;
            transition: -webkit-transform .2s;
            transition: transform .2s;
            transition: transform .2s, -webkit-transform .2s;
            -webkit-transform: scale(0);
            transform: scale(0)
        }

        .mint-loadmore {
            overflow: hidden
        }

        .mint-loadmore-content.is-dropped {
            transition: .2s
        }

        .mint-loadmore-bottom, .mint-loadmore-top {
            text-align: center;
            height: 50px;
            line-height: 50px
        }

        .mint-loadmore-top {
            margin-top: -50px
        }

        .mint-loadmore-bottom {
            margin-bottom: -50px
        }

        .mint-loadmore-spinner {
            display: inline-block;
            margin-right: 5px;
            vertical-align: middle
        }

        .mint-loadmore-text {
            vertical-align: middle
        }

        .mint-actionsheet {
            position: fixed;
            background: #e0e0e0;
            width: 100%;
            text-align: center;
            bottom: 0;
            left: 50%;
            -webkit-transform: translate3d(-50%, 0, 0);
            transform: translate3d(-50%, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: -webkit-transform .3s ease-out;
            transition: transform .3s ease-out;
            transition: transform .3s ease-out, -webkit-transform .3s ease-out
        }

        .mint-actionsheet-list {
            list-style: none;
            padding: 0;
            margin: 0
        }

        .mint-actionsheet-listitem {
            border-bottom: 1px solid #e0e0e0
        }

        .mint-actionsheet-button, .mint-actionsheet-listitem {
            display: block;
            width: 100%;
            height: 45px;
            line-height: 45px;
            font-size: 18px;
            color: #333;
            background-color: #fff
        }

        .mint-actionsheet-button:active, .mint-actionsheet-listitem:active {
            background-color: #f0f0f0
        }

        .actionsheet-float-enter, .actionsheet-float-leave-active {
            -webkit-transform: translate3d(-50%, 100%, 0);
            transform: translate3d(-50%, 100%, 0)
        }

        .mint-popup {
            position: fixed;
            background: #fff;
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: .2s ease-out
        }

        .mint-popup-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translate3d(-50%, 0, 0);
            transform: translate3d(-50%, 0, 0)
        }

        .mint-popup-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            -webkit-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0)
        }

        .mint-popup-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            -webkit-transform: translate3d(-50%, 0, 0);
            transform: translate3d(-50%, 0, 0)
        }

        .mint-popup-left {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            -webkit-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0)
        }

        .popup-slide-top-enter, .popup-slide-top-leave-active {
            -webkit-transform: translate3d(-50%, -100%, 0);
            transform: translate3d(-50%, -100%, 0)
        }

        .popup-slide-right-enter, .popup-slide-right-leave-active {
            -webkit-transform: translate3d(100%, -50%, 0);
            transform: translate3d(100%, -50%, 0)
        }

        .popup-slide-bottom-enter, .popup-slide-bottom-leave-active {
            -webkit-transform: translate3d(-50%, 100%, 0);
            transform: translate3d(-50%, 100%, 0)
        }

        .popup-slide-left-enter, .popup-slide-left-leave-active {
            -webkit-transform: translate3d(-100%, -50%, 0);
            transform: translate3d(-100%, -50%, 0)
        }

        .popup-fade-enter, .popup-fade-leave-active {
            opacity: 0
        }

        .mint-swipe, .mint-swipe-items-wrap {
            overflow: hidden;
            position: relative;
            height: 100%
        }

        .mint-swipe-items-wrap > div {
            position: absolute;
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            width: 100%;
            height: 100%;
            display: none
        }

        .mint-swipe-items-wrap > div.is-active {
            display: block;
            -webkit-transform: none;
            transform: none
        }

        .mint-swipe-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .mint-swipe-indicator {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 100%;
            background: #000;
            opacity: .2;
            margin: 0 3px
        }

        .mint-swipe-indicator.is-active {
            background: #fff
        }

        .mt-range {
            position: relative;
            height: 30px;
            line-height: 30px
        }

        .mt-range, .mt-range > * {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .mt-range [slot=start] {
            margin-right: 5px
        }

        .mt-range [slot=end] {
            margin-left: 5px
        }

        .mt-range-content {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            margin-right: 30px
        }

        .mt-range-runway {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            left: 0;
            right: -30px;
            border-top-color: #a9acb1;
            border-top-style: solid
        }

        .mt-range-thumb {
            background-color: #fff;
            position: absolute;
            left: 0;
            top: 0;
            width: 30px;
            height: 30px;
            border-radius: 100%;
            cursor: move;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .4)
        }

        .mt-range-progress {
            position: absolute;
            display: block;
            background-color: #26a2ff;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 0
        }

        .mt-range--disabled {
            opacity: .5
        }

        .picker {
            overflow: hidden
        }

        .picker-toolbar {
            height: 40px
        }

        .picker-items {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 0;
            text-align: right;
            font-size: 24px;
            position: relative
        }

        .picker-center-highlight {
            box-sizing: border-box;
            position: absolute;
            left: 0;
            width: 100%;
            top: 50%;
            margin-top: -18px;
            pointer-events: none
        }

        .picker-center-highlight:after, .picker-center-highlight:before {
            content: "";
            position: absolute;
            height: 1px;
            width: 100%;
            background-color: #eaeaea;
            display: block;
            z-index: 15;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5)
        }

        .picker-center-highlight:before {
            left: 0;
            top: 0;
            bottom: auto;
            right: auto
        }

        .picker-center-highlight:after {
            left: 0;
            bottom: 0;
            right: auto;
            top: auto
        }

        .picker-slot {
            font-size: 18px;
            overflow: hidden;
            position: relative;
            max-height: 100%
        }

        .picker-slot.picker-slot-left {
            text-align: left
        }

        .picker-slot.picker-slot-center {
            text-align: center
        }

        .picker-slot.picker-slot-right {
            text-align: right
        }

        .picker-slot.picker-slot-divider {
            color: #000;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .picker-slot-wrapper {
            transition-duration: .3s;
            transition-timing-function: ease-out;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .picker-slot-wrapper.dragging, .picker-slot-wrapper.dragging .picker-item {
            transition-duration: 0s
        }

        .picker-item {
            height: 36px;
            line-height: 36px;
            padding: 0 10px;
            white-space: nowrap;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
            color: #707274;
            left: 0;
            top: 0;
            width: 100%;
            box-sizing: border-box;
            transition-duration: .3s;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .picker-slot-absolute .picker-item {
            position: absolute
        }

        .picker-item.picker-item-far {
            pointer-events: none
        }

        .picker-item.picker-selected {
            color: #000;
            -webkit-transform: translateZ(0) rotateX(0);
            transform: translateZ(0) rotateX(0)
        }

        .picker-3d .picker-items {
            overflow: hidden;
            -webkit-perspective: 700px;
            perspective: 700px
        }

        .picker-3d .picker-item, .picker-3d .picker-slot, .picker-3d .picker-slot-wrapper {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d
        }

        .picker-3d .picker-slot {
            overflow: visible
        }

        .picker-3d .picker-item {
            -webkit-transform-origin: center center;
            transform-origin: center center;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition-timing-function: ease-out
        }

        .mt-progress {
            position: relative;
            height: 30px;
            line-height: 30px
        }

        .mt-progress, .mt-progress > * {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .mt-progress [slot=start] {
            margin-right: 5px
        }

        .mt-progress [slot=end] {
            margin-left: 5px
        }

        .mt-progress-content {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1
        }

        .mt-progress-runway {
            left: 0;
            right: 0;
            background-color: #ebebeb;
            height: 3px
        }

        .mt-progress-progress, .mt-progress-runway {
            position: absolute;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            top: 50%
        }

        .mt-progress-progress {
            display: block;
            background-color: #26a2ff;
            width: 0
        }

        .mint-toast {
            position: fixed;
            max-width: 80%;
            border-radius: 5px;
            background: rgba(0, 0, 0, .7);
            color: #fff;
            box-sizing: border-box;
            text-align: center;
            z-index: 1000;
            transition: opacity .3s linear
        }

        .mint-toast.is-placebottom {
            bottom: 50px;
            left: 50%;
            -webkit-transform: translate(-50%);
            transform: translate(-50%)
        }

        .mint-toast.is-placemiddle {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .mint-toast.is-placetop {
            top: 50px;
            left: 50%;
            -webkit-transform: translate(-50%);
            transform: translate(-50%)
        }

        .mint-toast-icon {
            display: block;
            text-align: center;
            font-size: 56px
        }

        .mint-toast-text {
            font-size: 14px;
            display: block;
            text-align: center
        }

        .mint-toast-pop-enter, .mint-toast-pop-leave-active {
            opacity: 0
        }

        .mint-indicator {
            transition: opacity .2s linear
        }

        .mint-indicator-wrapper {
            top: 50%;
            left: 50%;
            position: fixed;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            border-radius: 5px;
            background: rgba(0, 0, 0, .7);
            color: #fff;
            box-sizing: border-box;
            text-align: center
        }

        .mint-indicator-text {
            display: block;
            color: #fff;
            text-align: center;
            margin-top: 10px;
            font-size: 16px
        }

        .mint-indicator-spin {
            display: inline-block;
            text-align: center
        }

        .mint-indicator-mask {
            top: 0;
            left: 0;
            position: fixed;
            width: 100%;
            height: 100%;
            opacity: 0;
            background: transparent
        }

        .mint-indicator-enter, .mint-indicator-leave-active {
            opacity: 0
        }

        .mint-msgbox {
            position: fixed;
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
            background-color: #fff;
            width: 85%;
            border-radius: 3px;
            font-size: 16px;
            -webkit-user-select: none;
            overflow: hidden;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: .2s
        }

        .mint-msgbox-header {
            padding: 15px 0 0
        }

        .mint-msgbox-content {
            padding: 10px 20px 15px;
            border-bottom: 1px solid #ddd;
            min-height: 36px;
            position: relative
        }

        .mint-msgbox-input {
            padding-top: 15px
        }

        .mint-msgbox-input input {
            border: 1px solid #dedede;
            border-radius: 5px;
            padding: 4px 5px;
            width: 100%;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none
        }

        .mint-msgbox-input input.invalid, .mint-msgbox-input input.invalid:focus {
            border-color: #ff4949
        }

        .mint-msgbox-errormsg {
            color: red;
            font-size: 12px;
            min-height: 18px;
            margin-top: 2px
        }

        .mint-msgbox-title {
            text-align: center;
            padding-left: 0;
            margin-bottom: 0;
            font-size: 16px;
            font-weight: 700;
            color: #333
        }

        .mint-msgbox-message {
            color: #999;
            margin: 0;
            text-align: center;
            line-height: 36px
        }

        .mint-msgbox-btns {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 40px;
            line-height: 40px
        }

        .mint-msgbox-btn {
            line-height: 35px;
            display: block;
            background-color: #fff;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            margin: 0;
            border: 0
        }

        .mint-msgbox-btn:focus {
            outline: none
        }

        .mint-msgbox-btn:active {
            background-color: #fff
        }

        .mint-msgbox-cancel {
            width: 50%;
            border-right: 1px solid #ddd
        }

        .mint-msgbox-cancel:active {
            color: #000
        }

        .mint-msgbox-confirm {
            color: #26a2ff;
            width: 50%
        }

        .mint-msgbox-confirm:active {
            color: #26a2ff
        }

        .msgbox-bounce-enter {
            opacity: 0;
            -webkit-transform: translate3d(-50%, -50%, 0) scale(.7);
            transform: translate3d(-50%, -50%, 0) scale(.7)
        }

        .msgbox-bounce-leave-active {
            opacity: 0;
            -webkit-transform: translate3d(-50%, -50%, 0) scale(.9);
            transform: translate3d(-50%, -50%, 0) scale(.9)
        }

        .v-modal-enter {
            -webkit-animation: v-modal-in .2s ease;
            animation: v-modal-in .2s ease
        }

        .v-modal-leave {
            -webkit-animation: v-modal-out .2s ease forwards;
            animation: v-modal-out .2s ease forwards
        }

        @-webkit-keyframes v-modal-in {
            0% {
                opacity: 0
            }
        }

        @keyframes v-modal-in {
            0% {
                opacity: 0
            }
        }

        @-webkit-keyframes v-modal-out {
            to {
                opacity: 0
            }
        }

        @keyframes v-modal-out {
            to {
                opacity: 0
            }
        }

        .v-modal {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            opacity: .5;
            background: #000
        }

        .mint-datetime, .v-modal {
            width: 100%
        }

        .mint-datetime .picker-item, .mint-datetime .picker-slot-wrapper {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .mint-datetime .picker-toolbar {
            border-bottom: 1px solid #eaeaea
        }

        .mint-datetime-action {
            display: inline-block;
            width: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 16px;
            color: #26a2ff
        }

        .mint-datetime-cancel {
            float: left
        }

        .mint-datetime-confirm {
            float: right
        }

        .mint-indexlist {
            width: 100%;
            position: relative;
            overflow: hidden
        }

        .mint-indexlist-content {
            margin: 0;
            padding: 0;
            overflow: auto
        }

        .mint-indexlist-nav {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            background-color: #fff;
            border-left: 1px solid #ddd;
            text-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .mint-indexlist-nav, .mint-indexlist-navlist {
            margin: 0;
            max-height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .mint-indexlist-navlist {
            padding: 0;
            list-style: none
        }

        .mint-indexlist-navitem {
            padding: 2px 6px;
            font-size: 12px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none
        }

        .mint-indexlist-indicator {
            position: absolute;
            width: 50px;
            height: 50px;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
            line-height: 50px;
            background-color: rgba(0, 0, 0, .7);
            border-radius: 5px;
            color: #fff;
            font-size: 22px
        }

        .mint-indexsection {
            padding: 0;
            margin: 0
        }

        .mint-indexsection-index {
            margin: 0;
            padding: 10px;
            background-color: #fafafa
        }

        .mint-indexsection-index + ul {
            padding: 0
        }

        .mint-palette-button {
            display: inline-block;
            position: relative;
            border-radius: 50%;
            width: 56px;
            height: 56px;
            line-height: 56px;
            text-align: center;
            transition: -webkit-transform .1s ease-in-out;
            transition: transform .1s ease-in-out;
            transition: transform .1s ease-in-out, -webkit-transform .1s ease-in-out
        }

        .mint-main-button {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: blue;
            font-size: 2em
        }

        .mint-palette-button-active {
            -webkit-animation: mint-zoom .5s ease-in-out;
            animation: mint-zoom .5s ease-in-out
        }

        .mint-sub-button-container > * {
            position: absolute;
            top: 15px;
            left: 15px;
            width: 25px;
            height: 25px;
            transition: -webkit-transform .3s ease-in-out;
            transition: transform .3s ease-in-out;
            transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out
        }

        @-webkit-keyframes mint-zoom {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            10% {
                -webkit-transform: scale(1.1);
                transform: scale(1.1)
            }
            30% {
                -webkit-transform: scale(.9);
                transform: scale(.9)
            }
            50% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            90% {
                -webkit-transform: scale(1.01);
                transform: scale(1.01)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes mint-zoom {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            10% {
                -webkit-transform: scale(1.1);
                transform: scale(1.1)
            }
            30% {
                -webkit-transform: scale(.9);
                transform: scale(.9)
            }
            50% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            90% {
                -webkit-transform: scale(1.01);
                transform: scale(1.01)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @font-face {
            font-family: mintui;
            src: url(data:application/x-font-ttf;base64,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)
        }

        .mintui {
            font-family: mintui !important;
            font-size: 16px;
            font-style: normal;
            -webkit-font-smoothing: antialiased;
            -webkit-text-stroke-width: .2px;
            -moz-osx-font-smoothing: grayscale
        }

        .mintui-search:before {
            content: "\E604"
        }

        .mintui-more:before {
            content: "\E601"
        }

        .mintui-back:before {
            content: "\E600"
        }

        .mintui-field-error:before {
            content: "\E605"
        }

        .mintui-field-warning:before {
            content: "\E608"
        }

        .mintui-success:before {
            content: "\E602"
        }

        .mintui-field-success:before {
            content: "\E609"
        }</style>
    <style type="text/css"></style>
    <style type="text/css"></style>
    <style type="text/css">.mainpanel {
            overflow: auto;
            height: 100%;
            padding-bottom: 50px
        }

        .mint-button-text {
            font-size: 14px
        }

        .main-bottom-bar {
            right: 0;
            bottom: 0;
            left: 0;
            position: fixed;
            z-index: 1;
        / / background-color: #fafafa;
        / / background-color: #eaeaea;
        / / padding: 7 px;
            height: 48px
        }

        .noticePanel {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            opacity: .9;
            background-color: #464646
        }

        .notice {
            position: absolute;
            height: 280px;
            line-height: 50px;
            overflow: hidden;
            text-align: center;
            color: #fff;
            font-size: 14px;
            background-color: #2b3a44;
            border-radius: 10px;
            border: 1px solid #e0e1e2;
        / /: url(http://wap.ikood.cn/zqfc/images/tz.png);
        / /: no-repeat
        }

        .notice, .noticeul {
            margin: 0;
            padding: 0
        }

        .noticeul {
            margin-left: 10px;
            margin-right: 10px
        }

        .noticeli {
            float: left;
            margin: 0;
            padding: 0;
            width: 100%;
            list-style: none;
            text-decoration: none
        }

        .noticeSpan {
            display: inline-block;
            height: 30px;
            background-color: #635ead;
            font-size: 14px;
            color: #e3e3e3;
            border-radius: 5px;
            border: 1px solid #2a3045
        }

        .msgli, .noticeSpan {
            width: 100%;
            line-height: 30px
        }

        .msgli {
            display: block;
            height: 200px;
            text-align: left;
            color: #fff;
            overflow: hidden;
            list-style: none;
            text-decoration: none
        }</style>
    <style type="text/css">.arrow {
            width: 9px;
            height: 4px;
            margin: 0 auto 7px;
            border-bottom: 4px solid #26a2ff;
            transform: rotate(45deg);
            transform-origin: left
        }

        .arrow, .arrow:after {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent
        }

        .arrow:after {
            content: "";
            display: block;
            width: 100%;
            height: 100%;
            border-top: 4px solid #26a2ff;
            position: absolute;
            right: -4px;
            top: -9px;
            transform: rotate(90deg);
            transform-origin: bottom
        }

        .mint-button-text {
            font-size: 14px
        }

        .mint-header-title {
            font-size: 16px;
            font-weight: 700
        }

        .mint-cell-wrapper {
            font-size: 14px
        }

        .page-tabbar {
            overflow: hidden;
            height: 100vh;
            padding-top: 0
        }

        .page-wrap {
            overflow: auto;
            height: 100%;
            padding-bottom: 50px
        }

        .container-li1 {
            width: 32%
        }

        .container-li1, .container-li2 {
            float: left;
            list-style-type: none;
            margin: 3px 3px 3px 0
        }

        .container-li2 {
            width: 48%
        }

        .container-li3 {
            height: 38px;
            margin: 0
        }

        .container-button-li3, .container-li3 {
            width: 96%;
            float: left;
            list-style-type: none
        }

        .container-button-li3 {
            margin: 3px 3px 3px 0
        }

        .mint-navbar .mint-tab-item.is-selected {
            background-color: #d6d6d6
        }

        .page-wrap::-webkit-scrollbar {
            width: 4px;
            height: 4px
        }

        .page-wrap::-webkit-scrollbar-button {
            background-color: #ff7677
        }

        .page-wrap::-webkit-scrollbar-track {
            background: #ff66d5
        }

        .page-wrap::-webkit-scrollbar-track-piece {
        / / background: url(http://www.lyblog.net/wp/wp-content/themes/mine/img/stripes_tiny_08.png)
        }

        .page-wrap::-webkit-scrollbar-thumb {
            background: #ccf;
            border-radius: 4px
        }

        .page-wrap::-webkit-scrollbar-corner {
            background: #82afff
        }

        .page-wrap::-webkit-scrollbar-resizer {
            background: #ff0bee
        }

        .bottom-bar {
            right: 0;
            bottom: 0;
            left: 0;
            position: fixed;
            z-index: 1;
        / / background-color: #fafafa;
            background-color: #eaeaea;
        / / padding: 7 px
        }

        .mint-cell-text, .mint-cell-value {
            font-size: 12px
        }</style>
    <style type="text/css">.mint-button-text {
            font-size: 14px
        }

        .round {
            box-shadow: inset 1px -6px 10px #fff;
            width: .9rem;
            height: .9rem;
            border-radius: .9rem;
            background: #d5d5d5;
            color: #000;
            margin-right: .1rem;
            line-height: .9rem;
            font-size: .6rem
        }</style>
    <style type="text/css">.mint-button-text {
            font-size: 14px
        }</style>
</head>
<body>
<div id="app">
    <div class="page-tabbar">
        <header class="mint-header" style="background-color: rgb(70, 70, 70);">
            <div class="mint-header-button is-left"><a href="#/" class="active">
                    <button class="mint-button mint-button--default mint-button--normal"><span class="mint-button-icon"><i
                                class="mintui mintui-back"></i></span> <label class="mint-button-text">首页</label>
                    </button>
                </a></div>
            <h1 class="mint-header-title">秒速时时彩</h1>
            <div class="mint-header-button is-right"><a href="#/user" class="">
                    <button class="mint-button mint-button--default mint-button--normal" style="margin-right: 10px;">
                        <!----> <label class="mint-button-text">0.00金币</label></button>
                </a></div>
        </header>
        <div style="border: 1px solid rgb(214, 214, 214); margin-top: 5px; margin-bottom: 5px; font-size: 14px;">
            <table style="width: 100%; padding: 10px;">
                <tr>
                    <td height="40px" align="left" style="width: 35%;"><a>20180908646期</a></td>
                    <td align="right" style="width: 65%;">
                        <div style="width: 100%;">
                            <ul style="padding: 0px; margin: 0px;">
                                <li style="float: left; width: 25%; list-style-type: none; text-align: -webkit-center; line-height: 20px;">
                                    <div class="arrow"></div>
                                </li>
                                <li style="float: left; width: 15%; list-style-type: none;">
                                    <div
                                        style="width: 20px; height: 20px; background-color: rgb(255, 0, 0); border-radius: 10px; margin: 1px;">
                                        <span
                                            style="height: 20px; line-height: 20px; display: block; color: rgb(255, 255, 255); text-align: center;">9</span>
                                    </div>
                                </li>
                                <li style="float: left; width: 15%; list-style-type: none;">
                                    <div
                                        style="width: 20px; height: 20px; background-color: rgb(255, 0, 0); border-radius: 10px; margin: 1px;">
                                        <span
                                            style="height: 20px; line-height: 20px; display: block; color: rgb(255, 255, 255); text-align: center;">7</span>
                                    </div>
                                </li>
                                <li style="float: left; width: 15%; list-style-type: none;">
                                    <div
                                        style="width: 20px; height: 20px; background-color: rgb(255, 0, 0); border-radius: 10px; margin: 1px;">
                                        <span
                                            style="height: 20px; line-height: 20px; display: block; color: rgb(255, 255, 255); text-align: center;">7</span>
                                    </div>
                                </li>
                                <li style="float: left; width: 15%; list-style-type: none;">
                                    <div
                                        style="width: 20px; height: 20px; background-color: rgb(255, 0, 0); border-radius: 10px; margin: 1px;">
                                        <span
                                            style="height: 20px; line-height: 20px; display: block; color: rgb(255, 255, 255); text-align: center;">0</span>
                                    </div>
                                </li>
                                <li style="float: left; width: 15%; list-style-type: none;">
                                    <div
                                        style="width: 20px; height: 20px; background-color: rgb(255, 0, 0); border-radius: 10px; margin: 1px;">
                                        <span
                                            style="height: 20px; line-height: 20px; display: block; color: rgb(255, 255, 255); text-align: center;">2</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td height="40px" align="left" style="width: 35%;">20180908647期</td>
                    <td align="right" style="width: 70%;"><font color="red">封盘: 00:00 &nbsp;&nbsp;&nbsp;&nbsp;开奖:
                            00:07</font><!----></td>
                </tr>
            </table>
        </div>
        <div class="page-wrap">
            <div class="mint-navbar page-navbar"><a class="mint-tab-item is-selected">
                    <div class="mint-tab-item-icon"></div>
                    <div class="mint-tab-item-label">两面</div>
                </a> <a class="mint-tab-item">
                    <div class="mint-tab-item-icon"></div>
                    <div class="mint-tab-item-label">1-5球</div>
                </a> <a class="mint-tab-item">
                    <div class="mint-tab-item-icon"></div>
                    <div class="mint-tab-item-label">前中后</div>
                </a></div>
            <div class="mint-tab-container page-tabbar-container" style="padding-bottom: 230px;">
                <div class="mint-tab-container-wrap">
                    <div class="mint-tab-container-item" style="border: 1px solid rgb(214, 214, 214);">
                        <ul style="padding: 5px;">
                            <li class="container-li3"><p
                                    style="text-align: center; line-height: 30px; vertical-align: top; font-size: 14px;">
                                    总和、龙虎</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001001">
                                    <!----> <label class="mint-button-text">总和大 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001002">
                                    <!----> <label class="mint-button-text">总和小 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001003">
                                    <!----> <label class="mint-button-text">总和单 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001004">
                                    <!----> <label class="mint-button-text">总和双 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li1">
                                <button class="mint-button mint-button--default mint-button--large" id="105001005">
                                    <!----> <label class="mint-button-text">龙 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li1">
                                <button class="mint-button mint-button--default mint-button--large" id="105001006">
                                    <!----> <label class="mint-button-text">虎 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li1">
                                <button class="mint-button mint-button--default mint-button--large" id="105001007">
                                    <!----> <label class="mint-button-text">和 <span
                                            style="font-size: 10px; font-weight: bold;">9</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第一球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001008">
                                    <!----> <label class="mint-button-text">大 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001009">
                                    <!----> <label class="mint-button-text">小 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001010">
                                    <!----> <label class="mint-button-text">单 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001011">
                                    <!----> <label class="mint-button-text">双 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第二球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001012">
                                    <!----> <label class="mint-button-text">大 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001013">
                                    <!----> <label class="mint-button-text">小 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001014">
                                    <!----> <label class="mint-button-text">单 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001015">
                                    <!----> <label class="mint-button-text">双 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第三球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001016">
                                    <!----> <label class="mint-button-text">大 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001017">
                                    <!----> <label class="mint-button-text">小 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001018">
                                    <!----> <label class="mint-button-text">单 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001019">
                                    <!----> <label class="mint-button-text">双 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第四球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001020">
                                    <!----> <label class="mint-button-text">大 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001021">
                                    <!----> <label class="mint-button-text">小 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001022">
                                    <!----> <label class="mint-button-text">单 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001023">
                                    <!----> <label class="mint-button-text">双 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第五球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001024">
                                    <!----> <label class="mint-button-text">大 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001025">
                                    <!----> <label class="mint-button-text">小 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001026">
                                    <!----> <label class="mint-button-text">单 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105001027">
                                    <!----> <label class="mint-button-text">双 <span
                                            style="font-size: 10px; font-weight: bold;">1.99</span></label></button>
                            </li>
                        </ul>
                    </div>
                    <div class="mint-tab-container-item" style="border: 1px solid rgb(214, 214, 214); display: none;">
                        <ul style="padding: 5px;">
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第一球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002001">
                                    <!----> <label class="mint-button-text">0 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002002">
                                    <!----> <label class="mint-button-text">1 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002003">
                                    <!----> <label class="mint-button-text">2 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002004">
                                    <!----> <label class="mint-button-text">3 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002005">
                                    <!----> <label class="mint-button-text">4 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002006">
                                    <!----> <label class="mint-button-text">5 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002007">
                                    <!----> <label class="mint-button-text">6 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002008">
                                    <!----> <label class="mint-button-text">7 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002009">
                                    <!----> <label class="mint-button-text">8 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002010">
                                    <!----> <label class="mint-button-text">9 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第二球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002011">
                                    <!----> <label class="mint-button-text">0 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002012">
                                    <!----> <label class="mint-button-text">1 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002013">
                                    <!----> <label class="mint-button-text">2 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002014">
                                    <!----> <label class="mint-button-text">3 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002015">
                                    <!----> <label class="mint-button-text">4 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002016">
                                    <!----> <label class="mint-button-text">5 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002017">
                                    <!----> <label class="mint-button-text">6 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002018">
                                    <!----> <label class="mint-button-text">7 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002019">
                                    <!----> <label class="mint-button-text">8 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002020">
                                    <!----> <label class="mint-button-text">9 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第三球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002021">
                                    <!----> <label class="mint-button-text">0 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002022">
                                    <!----> <label class="mint-button-text">1 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002023">
                                    <!----> <label class="mint-button-text">2 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002024">
                                    <!----> <label class="mint-button-text">3 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002025">
                                    <!----> <label class="mint-button-text">4 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002026">
                                    <!----> <label class="mint-button-text">5 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002027">
                                    <!----> <label class="mint-button-text">6 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002028">
                                    <!----> <label class="mint-button-text">7 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002029">
                                    <!----> <label class="mint-button-text">8 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002030">
                                    <!----> <label class="mint-button-text">9 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第四球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002031">
                                    <!----> <label class="mint-button-text">0 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002032">
                                    <!----> <label class="mint-button-text">1 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002033">
                                    <!----> <label class="mint-button-text">2 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002034">
                                    <!----> <label class="mint-button-text">3 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002035">
                                    <!----> <label class="mint-button-text">4 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002036">
                                    <!----> <label class="mint-button-text">5 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002037">
                                    <!----> <label class="mint-button-text">6 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002038">
                                    <!----> <label class="mint-button-text">7 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002039">
                                    <!----> <label class="mint-button-text">8 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002040">
                                    <!----> <label class="mint-button-text">9 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">第五球</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002041">
                                    <!----> <label class="mint-button-text">0 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002042">
                                    <!----> <label class="mint-button-text">1 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002043">
                                    <!----> <label class="mint-button-text">2 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002044">
                                    <!----> <label class="mint-button-text">3 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002045">
                                    <!----> <label class="mint-button-text">4 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002046">
                                    <!----> <label class="mint-button-text">5 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002047">
                                    <!----> <label class="mint-button-text">6 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002048">
                                    <!----> <label class="mint-button-text">7 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002049">
                                    <!----> <label class="mint-button-text">8 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105002050">
                                    <!----> <label class="mint-button-text">9 <span
                                            style="font-size: 10px; font-weight: bold;">9.9</span></label></button>
                            </li>
                        </ul>
                    </div>
                    <div class="mint-tab-container-item" style="border: 1px solid rgb(214, 214, 214); display: none;">
                        <ul style="padding: 5px;">
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">前三</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003001">
                                    <!----> <label class="mint-button-text">豹子 <span
                                            style="font-size: 10px; font-weight: bold;">75</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003002">
                                    <!----> <label class="mint-button-text">顺子 <span
                                            style="font-size: 10px; font-weight: bold;">14.5</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003003">
                                    <!----> <label class="mint-button-text">对子 <span
                                            style="font-size: 10px; font-weight: bold;">3.3</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003004">
                                    <!----> <label class="mint-button-text">半顺 <span
                                            style="font-size: 10px; font-weight: bold;">2.5</span></label></button>
                            </li>
                            <li class="container-button-li3">
                                <button class="mint-button mint-button--default mint-button--large" id="105003005">
                                    <!----> <label class="mint-button-text">杂六 <span
                                            style="font-size: 10px; font-weight: bold;">3</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">中三</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003006">
                                    <!----> <label class="mint-button-text">豹子 <span
                                            style="font-size: 10px; font-weight: bold;">75</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003007">
                                    <!----> <label class="mint-button-text">顺子 <span
                                            style="font-size: 10px; font-weight: bold;">14.5</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003008">
                                    <!----> <label class="mint-button-text">对子 <span
                                            style="font-size: 10px; font-weight: bold;">3.3</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003009">
                                    <!----> <label class="mint-button-text">半顺 <span
                                            style="font-size: 10px; font-weight: bold;">2.5</span></label></button>
                            </li>
                            <li class="container-button-li3">
                                <button class="mint-button mint-button--default mint-button--large" id="105003010">
                                    <!----> <label class="mint-button-text">杂六 <span
                                            style="font-size: 10px; font-weight: bold;">3</span></label></button>
                            </li>
                            <li class="container-li3"><p style="text-align: center; font-size: 14px;">后三</p></li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003011">
                                    <!----> <label class="mint-button-text">豹子 <span
                                            style="font-size: 10px; font-weight: bold;">75</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003012">
                                    <!----> <label class="mint-button-text">顺子 <span
                                            style="font-size: 10px; font-weight: bold;">14.5</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003013">
                                    <!----> <label class="mint-button-text">对子 <span
                                            style="font-size: 10px; font-weight: bold;">3.3</span></label></button>
                            </li>
                            <li class="container-li2">
                                <button class="mint-button mint-button--default mint-button--large" id="105003014">
                                    <!----> <label class="mint-button-text">半顺 <span
                                            style="font-size: 10px; font-weight: bold;">2.5</span></label></button>
                            </li>
                            <li class="container-button-li3">
                                <button class="mint-button mint-button--default mint-button--large" id="105003015">
                                    <!----> <label class="mint-button-text">杂六 <span
                                            style="font-size: 10px; font-weight: bold;">3</span></label></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <ul style="padding: 0px; margin: 0px;">
                <li style="float: left; margin-left: 3px; margin-top: 3px; margin-bottom: 5px; list-style-type: none;">
                    <span style="line-height: 48px; color: red;">已选择 0 注</span></li>
                <li style="float: left; margin-bottom: 5px; margin-top: 3px; list-style-type: none;">
                    <div style="height: 48px; width: 100%; margin: 0px 0px 0px 3px; padding: 0px;"><a
                            class="mint-cell mint-field is-nolabel"
                            style="width: 92px; margin: 0px; padding: 0px; height: 40px;"><!---->
                            <div class="mint-cell-left"></div>
                            <div class="mint-cell-wrapper">
                                <div class="mint-cell-title"><!----> <span class="mint-cell-text"></span> <!----></div>
                                <div class="mint-cell-value"><input placeholder="输入金额" number="true" type="number"
                                                                    class="mint-field-core">
                                    <div class="mint-field-clear" style="display: none;"><i
                                            class="mintui mintui-field-error"></i></div>
                                    <span class="mint-field-state is-default"><i
                                            class="mintui mintui-field-default"></i></span>
                                    <div class="mint-field-other"></div>
                                </div>
                            </div>
                            <div class="mint-cell-right"></div> <!----></a></div>
                </li>
                <li style="float: right; margin-right: 3px; margin-top: 9px; list-style-type: none;">
                    <button class="mint-button mint-button--danger mint-button--normal"><!----> <label
                            class="mint-button-text">重置</label></button>
                </li>
                <li style="float: right; margin-right: 3px; margin-top: 9px; list-style-type: none;"><!---->
                    <button class="mint-button mint-button--primary mint-button--normal is-disabled"
                            disabled="disabled"><!----> <label class="mint-button-text">封盘</label></button>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="http://cdn.ikood.cn/8848/dist/build.js"></script>
<div style="display:none;">
    <script src="https://s19.cnzz.com/z_stat.php?id=1267952706&amp;web_id=1267952706" language="JavaScript"></script>
    <script src="https://c.cnzz.com/core.php?web_id=1267952706&amp;t=z" charset="utf-8" type="text/javascript"></script>
    <a href="http://www.cnzz.com/stat/website.php?web_id=1267952706" target="_blank" title="站长统计">站长统计</a>
</div>


<div class="mint-msgbox-wrapper" style="position: absolute; z-index: 2001;">
    <div class="mint-msgbox" style="display: none;">
        <div class="mint-msgbox-header">
            <div class="mint-msgbox-title">投注失败，余额不足！</div>
        </div> <!---->
        <div class="mint-msgbox-btns">
            <button class="mint-msgbox-btn mint-msgbox-cancel " style="display: none;">取消</button>
            <button class="mint-msgbox-btn mint-msgbox-confirm ">确定</button>
        </div>
    </div>
</div>
</body>
</html>
