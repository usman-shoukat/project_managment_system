import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-notifications',
  templateUrl: './notifications.component.html',
  styleUrls: ['./notifications.component.css'],
})
export class Notificationsomponent implements OnInit {
  notifications;
  constructor(public commonService: CommonServiceService) {}

  ngOnInit(): void {
    this.getNotifications();
  }

  getNotifications() {
    this.commonService.getNotifications().subscribe((res) => {
      this.notifications = res;
    });
  }
}
