import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { CommonServiceService } from './../../common-service.service';

@Component({
  selector: 'app-booking',
  templateUrl: './booking.component.html',
  styleUrls: ['./booking.component.css'],
})
export class BookingComponent implements OnInit {
  services: any = [];
  loadPagination;
  public daterange: any = {};

  constructor(
    private route: ActivatedRoute,
    public commonService: CommonServiceService
  ) {}

  ngOnInit(): void {
    setTimeout(() => (this.loadPagination = true), 2000);    
    this.getServices();
  }

  getServices() {
    this.commonService.getAppointments().subscribe((res) => {
      this.services = res;
    });
  }
}
