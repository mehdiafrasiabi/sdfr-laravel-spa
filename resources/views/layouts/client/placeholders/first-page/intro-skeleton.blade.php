<div>
    <style>
        .intro-skeleton {
            width: 100%;
            max-width: 1200px;
            height: 250px;
            background: linear-gradient(to right, #ff0000, #5e00a0, #0000ff);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .skeleton-img {
            width: 200px;
            height: 200px;
            background: #ccc;
            border-radius: 10px;
            animation: shimmer 1.5s infinite linear;
        }

        .skeleton-text {
            width: 60%;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .skeleton-title {
            width: 70%;
            height: 25px;
            background: #e0e0e0;
            border-radius: 5px;
            animation: shimmer 1.5s infinite linear;
        }

        .skeleton-subtitle {
            width: 90%;
            height: 15px;
            background: #d0d0d0;
            border-radius: 5px;
            animation: shimmer 1.5s infinite linear;
        }

        .skeleton-button {
            width: 120px;
            height: 40px;
            background: #d0d0d0;
            border-radius: 20px;
            animation: shimmer 1.5s infinite linear;
        }

        @keyframes shimmer {
            0% {
                background-color: #e0e0e0;
            }
            50% {
                background-color: #f0f0f0;
            }
            100% {
                background-color: #e0e0e0;
            }
        }
    </style>
    <div class="intro-skeleton">
        <div class="skeleton-img"></div>
        <div class="skeleton-text">
            <div class="skeleton-title"></div>
            <div class="skeleton-subtitle"></div>
            <div class="skeleton-subtitle"></div>
            <div class="skeleton-button"></div>
        </div>
    </div>
</div>
