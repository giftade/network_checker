<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../Public/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="../Assets/css/main.css" rel="stylesheet" />

    <title>Signal Check</title>
</head>

<body>
    <div class="">
        <div class="px-5 d-flex align-items-center justify-content-between items-center" style="height: 64px; width: 100%;">
            <div>
                <img src="../Assets/images/logo.png" alt="">
            </div>
            <div>
                <h1 class="text-uppercase" style="font-size: 12px">
                    Radio Network Status Checker
                </h1>
            </div>
            <div>
                <img src="../Assets/images/socials.png" alt="">
            </div>

        </div>

        <div class="px-5 d-flex align-items-center" style="height: 64px; width: 100%; background-color: #48A8C1; ">
            <a class="text-uppercase link <?php echo $_SERVER['REQUEST_URI'] === '/' ? 'active' : ''; ?>">View Mobile Visibility</a>
            <a class="text-uppercase link px-4 ">About Network Checker</a>
        </div>
        <?php echo $content ?>
        <div class="footer_class">
            <p class="footer_content"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect x="0.5" width="24" height="24" fill="url(#pattern0)" />
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_140_275" transform="scale(0.01)" />
                        </pattern>
                        <image id="image0_140_275" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAMCElEQVR4nO2ce4wdVR3HZ33wiiCvgBgwopXCwvbeufOeufPY+5zXnTNz587MvSvtFqMxgQqlEIoiKS8ff2AUoYAaE7FGpVAsLZVAJSbGmBDLIwhSrZTW8iivRumDbtvdMUe3f0jYe+bc3fvYMp/km2y22+/5nvM7d2bOmZlLECkpKSkpKSkpKSkpKSkpKSkpKSldwbbtk5rNJtlqtdwoiha3Wq3Lx8bGVkK1Wq1lrVbrslar5YdhyARB8Mm0DHPIqlWrPjI2NkY1m83roih6pNlsvtxsNqeazWaModejKHoiiqKbwjBUgiA4Li0SZhGazWY5iqI1zWbzHczBT6L9zWZzfRRFdV3Xj0+LMwPNZvPsMAxvC8NwVxRFcS8UhuGeKIpWR1H0+bQw/1+I70ZRtL9XhfiAwkyGYbgxDMPch/rkHIbht8IwPBiGYTwICoJgMgiCe4MgOJ34MBFFkR2G4fZ+FyCcuTBvBUHwJYIghohjmfHx8RMajcYdQRDE80GNRmPDMftpCYJgYRAEz83xoO1tNBq7gyB4CWr6571z3MZO3/dF4ljC9/1Ko9F4t9FoxLPQ877v3xkEwWLP89ou+gAApwZBwMK/bTQad/m+/8Js2vZ9/1Cj0fgicSwQBEHk+/5EhwOxJQiCq4Ig+NRsc3ied06j0VjeaDSe6rAwU77vX03MZxqNxlfr9fqk7/txUtXr9cl6vX6/7/tkt3J5npfzff8B3GzTupmYj3ie1/Q8Dw5ujKGN8FzTq4yu617ked4mzIxQVxHziXq9XvI8byJpBz3P2+m6LuhXXs/zvHq9vgsjL5xoY8R8YHrWvet5XpxQ6y3LOq3fuYMgON3zvA1Jc7uuO+E4DkcMMkEQnOh53nMJOzTped61A7b4GvI8b6XneVMJC/PyIEymGXFd90eu68YoAQAmXNdtEQMKAGAMAHAoYV82Dtik+h+u69pJiwEAMGc5i3nXdVcAANYAAJ5wXXcLFADgSdd1NwMA1gIAlsP1iqqqH+ukEc/zrKRFcRxnCTFohyoAwHYAQNxOjuNMdvrJ8DzvLADAdwAAO1HtvK/NNxzHuQWuQ3DbdF33UgDAVJI2BurQBQC4NeEAwXMGFrquHw8AuA0AsA+nEB8waPAkfDucPDjtO45zfUL/u4lBAABwnuM4Bx3HiRFaj3usdV33glqt9nQCbxy96LouixFjqFarPYLyrdVqR2zbvpDoN7Va7Y4Eg7AT9yMNAMjWarW357gYR/UeAEBLmsV13TMcx3klQVHuI/oJPK7XarX9tVotRghr0Wfb9oW2bb+dwHc2+rdpmlmMTH4Cz8O1Wu18ol9YlnWrbdtxO1mWBS8LExMEwYm2bf8F5TsXsizreZwHHWzbfjSB7w+Jfj0dYtv2LkSHJx3Hwdqbsm37BwkH80Xbtlc4jjM8fTgcgreFDcMYsSxrWdKiwkmVNFutVrsY9gnh91ZfHjWybbtoWVaM0FocT8uyPmea5gTCc8o0zVsSdHrIMIwrLMt6r52faZp7cc5vlmU9iOq3bdsu0WtM07wPFUzXdawtdNM0f4ryNE3zehxP27YvSzBxVib1syyLSuC3juglQRB81DCMPaZpxjPJMIwtOJ6O45xsmua+dp6maf6xk7yGYfwe4fs0pt8zCL+9FEV9nOgVcJYgAsGCYN0zMAzjyyhPXdc72nIxTRMgvKfK5fJZGFlXJOi/RPQKXdevNQwjbqOparWKtVVhGMYGhOc/Ot3Emz7ZH2rnr+t6EaP/5yKyQt1I9ArDMB5BhHkBxw9uABqG8S/EgH1vNpl1Xf9tG/+DpVLp0zh+hmFsReR9nOgV1Wp1h67rcRvdhemXQ/jFODP4g4CHJF3X79V1ffP7tK5SqYzi+lWr1bvb5a1Wq68QvQB+/KvV6iQizGIcz0qlMoYqSKFQOJsYIHRdH0dknoIXKl0PUqlUMtVqNW6nSqXCYnquQvjtIQYMXdf5BONAdT1IpVJxK5VK3E6lUgnrzaVyuXwPwnM7MWDAxSRqHOBYdT1IuVweR4TY14Hnfe08y+XyNmIAqVQqBxBj0f07ieVy+YpyuRy30eu4nqVS6dcIz78TA0i5XN7dLnepVFrW9RClUmnlXA9euVxeOx8LUiqVtiEK8o1ehLihVCrFM6lYLGIPXrFYXDvXnr2gWCxua5e7VCpd34sQVyJCdHLIenA+FqRUKu1ulxse3rseolAoLC0Wi/FMKhQK2Cf1QqGwHuH5N2IAKRaLB9rlLhaL3T+pFwoFDxEiVlX1VEzP+xGeW4kBI5/Pn4YaBzhWXQ+iaRpXKBRihLAWhoVCYTXCbw8xYKiqyicYh+6/1QsXfaOjozFCWFsnmqZdh/KsVCoD9a6fpmnjiMxTqqp+oidhRkdHX0OEwdpc1DTNSlBkZTaZZVk+Z3R09Cejo6Ob36ffwPZx/TRNu6ddXk3TerO5CFFV9XeapsUzSVVV3O33M1VVnUR43jbLzI+18T6iKMoXMP22tsuraVrvtt9VVb0ZEWYKzkhMz6cQBXmq07y6rp+iadphRObEz47Jsnwewgvm/SbRK2RZVlRVjRFajuOpqurXUZ6KojAd5o0S5P1sUj9FUa5B+Wma1rtbuMPDw8cpirIPEQprRkuS9BlFUY4gCvLLDuIOqar6JCLrSziGiqI8i8jZ24ccILIsP6woStxOsixjXfYpivIrhOcknO04nqqqfg2VU1GUb2P40Qn8HiB6TT6fb8x1MEVRRmRZPoIo8kFVVb+CeuABPqoky/JyRVEmEBknRFFMfD9dluWHEkzE3r/ACp+JlWX5HVmW4zaaVBTlIhxfWZZXIzz/q3w+/wdZlpfCiwdVVU84WgRJki7O5/NX5vP5vyb0SXyJrqrqJbIsTyH83oaHdKIfwM4k6PAm3IWnLMs7kgzmHGiHKIqJ73vn8/nHEnj252FrCM/zCyRJOpzP5+N2kiQJa08nn89LkiS9h/KdpQ5IkpTHyBQk8DyEc7XWFSRJWiNJUozQLp7nsbY+BEGwRFE8mMC7Ex2SJKmGs3CVJOlVlK8oiv19YQfCcdxFkiRNJgi7AffJQ1EUBVEUX5vjYmwTBAFnG2ZIkqRNCfp3RBCE/r/SBhEE4ceiKMYoCYKQ+CnzozAMcwaceaIoTiVpo43g1dT3KYo6icBAFMUbEvpj7d91FXg4EgThzQSh4aB29L1THMctEgThF6IoHsAsxOuCINzEMAz2VzzxPL8k4UR4A94fIQYJnufHBUGIE+gQPD902g7LsqcIguDyPH+7IAgbeJ7/syAIW6B4nv+TIAibeZ5fw/P8MkEQyE6/OIDn+dp0VmSfYN+JAWSI5/mNSYsiiuKlxIDC8/ySpMUQBOGhgfxqjaOHLo7jdvA8HyfQFMdx1w9YZ4Y4jrsBZkvYh5dxb1f3HI7jOJ7nJxJ2KOY4biM8cfc7N0VRZ/I8vwkj90Ge57FuVfcNjuMu5TgOfgLiJGJZ9hWO4/x+5WVZNmBZ9tWkeTmOm+Q4DmuTs+9wHHcVRgePFuZRlmWHe5WRpulLOI57DDcn7BsxH2EY5maWZWNMTbIsu47juK49ys8wDM2y7EMsy07h5mMY5iZiPkNR1NUMw0wyDBPjiqbpZxiGWcGy7LmzzUHT9HkMw1xD0/SznWSZ7sOVxLEARVEthmEmOhyIeFov0jR9N8Mw4xRFce0WYvDfWJblGYZZOv1/ts6y7QnYB+JYgmEYgabpHTRNx3Oo/TRNv0FR1EtQ8Ofp381ZGxRFbadpuqN7+QMPRVGfpCjq/jkuStwtURT1MO4u9XxkiCTJyyiKepOiqHgQlcvldtM0vXjAFq3dZWRk5DSKolbncrkjA1SIIzBTJpMZ7NV3N8lms8O5XO7nJEkezuVycT8E2yZJ8meLFi26oN/jMTAsWrTo/FwudydJku/0sBBvkSR5B2y73/0fWBYsWHB8JpNxs9nsgyRJ7iNJMp5j7c1ms+tgG317OmS+Mjw8fBxFUflsNnsjSZKbs9nsq7gFyGaz/yRJ8nHokclkpE7vj6TMwMKFC08eGRnJZTIZL5PJLM1ms5dnMpmV01qWzWaXwNlPkiQN/3Ymn5SUlJSUlJSUlJSUlJSUlJSUlBRiVvwHNQXQCHXwzqUAAAAASUVORK5CYII=" />
                    </defs>
                </svg>
                copyright 2023 SignalCheck solutions</p>
        </div>
    </div>

</body>
<script src="../Public/Jquery/jquery.min.js">
</script>
<script src="../Public/bootstrap/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
<script src="../Assets/javascript/map.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="script.js"></script>

</html>