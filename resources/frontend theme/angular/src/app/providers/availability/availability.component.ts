import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-availability',
  templateUrl: './availability.component.html',
  styleUrls: ['./availability.component.css'],
})
export class AvailabilityComponent implements OnInit {
  available_days: any = [];
  constructor(public commonService: CommonServiceService) {}

  ngOnInit(): void {
    this.getAvailableDays();
  }

  getAvailableDays() {
    this.commonService.getAvailableDays().subscribe((res) => {
      this.available_days = res;
    });
  }

}
