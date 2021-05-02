import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-payment',
  templateUrl: './payment.component.html',
  styleUrls: ['./payment.component.css'],
})
export class PaymentComponent implements OnInit {
  services;
  constructor(public commonService: CommonServiceService) {}

  ngOnInit(): void {
    this.getServices();
  }

  getServices() {
    this.commonService.getServices().subscribe((res) => {
      this.services = res;
    });
  }
}
