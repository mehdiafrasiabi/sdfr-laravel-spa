<div>
    <div class="intro-skeleton">
        <div class="skeleton-img"></div>
        <div class="skeleton-text">
            <div class="skeleton-line"></div>
            <div class="skeleton-line"></div>
            <div class="skeleton-line short"></div>
            <div class="skeleton-btn"></div>
        </div>
    </div>

    <style>
        .intro-skeleton {
            width: 100%;
            max-width: 1100px;
            height: 260px;
            background: #161616;
            border-radius: 16px;
            display: flex;
            align-items: center;
            padding: 32px;
            position: relative;
            overflow: hidden;
        }
        .skeleton-img {
            width: 200px;
            height: 200px;
            background: #222;
            border-radius: 50%;
            margin-right: 40px;
            position: relative;
        }
        .skeleton-text {
            flex: 1;
        }
        .skeleton-line {
            height: 24px;
            background: #222;
            border-radius: 8px;
            margin-bottom: 12px;
            width: 90%;
        }
        .skeleton-line.short {
            width: 60%;
        }
        .skeleton-btn {
            width: 160px;
            height: 44px;
            background: #222;
            border-radius: 8px;
            margin-top: 20px;
        }

        /* افکت انیمیشن لودینگ */
        .skeleton-img, .skeleton-line, .skeleton-btn {
            position: relative;
            overflow: hidden;
        }
        .skeleton-img::after, .skeleton-line::after, .skeleton-btn::after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.05));
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { left: -100%; }
            100% { left: 100%; }
        }
    </style>

</div>
