import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-subscription',
  templateUrl: './subscription.component.html',
  styleUrls: ['./subscription.component.css'],
})
export class SubscriptionComponent implements OnInit {
  plans: any = [];
  loadPagination = false;

  constructor(public commonService: CommonServiceService) {}

  ngOnInit(): void {
    this.getPlans();
    setTimeout(() => (this.loadPagination = true), 1000);
  }

  getPlans() {
    this.commonService.getPlans().subscribe((res) => {
      this.plans = res;
    });
  }
}
