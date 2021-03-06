import time 
from plyer import notification

if __name__ == '__main__':
    while True:
        notification.notify(
            title = "Alert!!!",
            message = "Take a beak! It has been an hour!",
            timeout = 10
        )
        time.sleep(3600)