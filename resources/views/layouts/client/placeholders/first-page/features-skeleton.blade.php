<div>
    <style>
        .features-skeleton {
            width: 100%;
            max-width: 1200px;
            background: #1a1a1a;
            border-radius: 15px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .skeleton-title {
            width: 120px;
            height: 35px;
            background: #333;
            border-radius: 20px;
            animation: shimmer 1.5s infinite linear;
        }

        .skeleton-items {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .skeleton-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .skeleton-icon {
            width: 60px;
            height: 60px;
            background: #222;
            border-radius: 50%;
            animation: shimmer 1.5s infinite linear;
        }

        .skeleton-text {
            width: 80px;
            height: 15px;
            background: #444;
            border-radius: 5px;
            animation: shimmer 1.5s infinite linear;
        }

        @keyframes shimmer {
            0% { background-color: #333; }
            50% { background-color: #444; }
            100% { background-color: #333; }
        }
    </style>

    <div class="features-skeleton">
        <div class="skeleton-title"></div>
        <div class="skeleton-items">
            <div class="skeleton-item">
                <div class="skeleton-icon"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="skeleton-item">
                <div class="skeleton-icon"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="skeleton-item">
                <div class="skeleton-icon"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="skeleton-item">
                <div class="skeleton-icon"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="skeleton-item">
                <div class="skeleton-icon"></div>
                <div class="skeleton-text"></div>
            </div>
        </div>
    </div>
</div>
